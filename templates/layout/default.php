<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'User Management System';
?>
<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <style>
        /* The container <div> - needed to position the dropdown content */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
            color: #606C76;
            padding: 3px;
            margin: 6px;
            text-decoration: none;
            display: block;
        }

        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {
            background-color: #ddd;
        }

        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Change the background color of the dropdown button when the dropdown content is shown */
        /* .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        } */
    </style>
</head>

<body>
    <nav class="top-nav">
        <div class="top-nav-title">
            <a href="<?= $this->Url->build('/index') ?>"><span>User Management </span>System</a>
        </div>
        <div class="top-nav-links">
            <?php if ($user_id == null) : ?>
                <a rel="noopener" href="<?= $this->Url->build('/login') ?>">Login</a>
            <?php endif; ?>
            <?php if ($user_id == null) : ?>
                <a rel="noopener" href="<?= $this->Url->build('/register') ?>">Register</a>
            <?php endif; ?>
            <?php if ($user_id != null) : ?>
                <a rel="noopener" href="<?= $this->Url->build('/index') ?>">Home</a>
            <?php endif; ?>
            <?php if ($user_id != null) : ?>
                <div class="dropdown">
                    <a class="dropbtn">Profile</a>
                    <div class="dropdown-content">
                        <a href="<?= $this->Url->build('/view' . '/' . $user_id) ?>">View Profile</a>
                        <a rel="noopener" href="<?= $this->Url->build('/logout') ?>" style="color:#D33C43">Logout</a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </nav>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>
</body>

</html>
