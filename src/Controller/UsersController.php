<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Utility\Security;
use Authentication\PasswordHasher\DefaultPasswordHasher;
// use Cake\ORM\TableRegistry;
use Cake\Mailer\Mailer;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('user'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            $password = $this->request->getData('password');
            $token = Security::hash(Security::randomBytes(32));

            $user->email = $this->request->getData('email');
            $user->token = $token;
            $user->role = 0;
            $user->verified = 0;

            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                //send mail
                $mailer = new Mailer('default');
                // $mailer->setTransport('gmail');
                $mailer->setProfile('mailtrap')
                    ->setTo($user->email)
                    ->setEmailFormat('html')
                    ->setSubject('Verify Your Account')
                    ->deliver('Hi ' . $user->name . ',<br/>Please confirm your email by clicking link below<br/><a href="http://localhost/MiddlePoint/users/verify/' . $token . '">Verification Email</a><br/>Thank you for registration.');

                return $this->redirect(['action' => 'login']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    public function register()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            $password = $this->request->getData('password');
            $token = Security::hash(Security::randomBytes(32));

            $user->email = $this->request->getData('email');
            $user->token = $token;
            $user->role = 0;
            $user->verified = 0;

            if ($this->Users->save($user)) {
                $this->Flash->success(__('Register successful, check your inbox and verify your account.'));

                //send mail
                $mailer = new Mailer();
                $mailer->setProfile('mailtrap')
                    ->setTo($user->email)
                    ->setEmailFormat('html')
                    ->setSubject('Verify Your Account')
                    ->deliver('Hi ' . $user->name . ',<br/>Please confirm your email by clicking link below<br/><a href="http://localhost/MiddlePoint/users/verify/' . $token . '">Verification Email</a><br/>Thank you for registration.');

                return $this->redirect(['action' => 'login']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    public function verify($token)
    {
        $user = $this->Users->find('all')->where(['token' => $token])->first();

        if (!empty($user) && $user->token == $token) {
            $user->verified = 1;
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Your account has been verified.'));

                return $this->redirect(['action' => 'login']);
            }
            $this->Flash->error(__('Your account has not been verified. Check URL and try again.'));
        } else $this->Flash->error(__('Your account has not registered.'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function login()
    {
        $this->request->allowMethod(['get', 'post']);
        $result = $this->Authentication->getResult();
        // regardless of POST or GET, redirect if user is logged in
        // debug($result->_data);
        if ($result->isValid()) {
            // redirect to /articles after login success
            return $this->redirect([
                'controller' => 'Users',
                'action' => 'index'
            ]);
        }
        // display error if user submitted and authentication failed
        if ($this->request->is('post') && !$result->isValid()) {
            $this->Flash->error(__('Invalid username or password'));
        }
    }

    public function logout()
    {
        $result = $this->Authentication->getResult();
        // regardless of POST or GET, redirect if user is logged in
        if ($result->isValid()) {
            $this->Authentication->logout();
            return $this->redirect(['controller' => 'Users', 'action' => 'login']);
        }
    }

    public function forgot()
    {
        if ($this->request->is('post')) {
            $email = $this->request->getData('email');
            $token = Security::hash(Security::randomBytes(25));

            $userTable = $this->Users;
            if ($email == NULL) {
                $this->Flash->error(__('Please insert your email address'));
            }
            if ($user = $userTable->find('all')->where(['email' => $email])->first()) {
                $user->token = $token;
                if ($userTable->save($user)) {
                    $mailer = new Mailer('default');
                    $mailer->setProfile('mailtrap')
                        // $mailer->setFrom(['testerformls@gmail.com' => 'myCake4'])
                        ->setTo($email)
                        ->setEmailFormat('html')
                        ->setSubject('Your Forgot Password Request')
                        ->deliver('Hello ' . $user->name . ',<br/>Here is your password reset link. Click and reset your password.<br/><br/><a href="http://localhost/MiddlePoint/users/resetpassword/' . $token . '">Reset Password</a>');
                }
                $this->Flash->success('Reset password link has been sent to your email ' . $email . ', please check your inbox.');
            }
            if ($userTable->find('all')->where(['email' => $email])->count() == 0) {
                $this->Flash->error(__('Email is not registered in system'));
            }
        }
    }

    public function resetpassword($token)
    {
        if ($this->request->is('post')) {
            $userTable = $this->Users;
            $user = $userTable->find('all')->where(['token' => $token])->first();
            $user->password = $this->request->getData('password');
            if ($userTable->save($user)) {
                $this->Flash->success('Password successfully reset. Please login using your new password');
                return $this->redirect(['action' => 'login']);
            }
        }
    }
}
