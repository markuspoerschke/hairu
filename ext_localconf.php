<?php
defined('TYPO3_MODE') or die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
  'PAGEmachine.Hairu',
  'Login',
  array(
    'Login' => 'showLoginForm, showLogoutForm, showPasswordResetForm, startPasswordReset',
  ),
  array(
    'Login' => 'showLoginForm, showLogoutForm, showPasswordResetForm, startPasswordReset',
  )
);