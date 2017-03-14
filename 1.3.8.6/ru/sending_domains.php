<?php defined('MW_PATH') || exit('No direct script access allowed');

/**
 * Translation file for "sending_domains" category.
 * 
 * This translation is automatically generated by the Translate extension.
 * 
 * @package MailWizz EMA
 * @author Serban George Cristian <cristian.serban@mailwizz.com> 
 * @link http://www.mailwizz.com/
 * @copyright 2013-2017 MailWizz EMA (http://www.mailwizz.com)
 * @license http://www.mailwizz.com/license/
 * @since 1.1
 */
 
 return array (
  'This domain has been verified' => 'This domain has been verified',
  'Verify this domain' => 'Verify this domain',
  'Please edit your DNS records for {domain} domain and add the following TXT record: ' => 'Please edit your DNS records for {domain} domain and add the following TXT record: ',
  'For best delivery rates, your domain SPF record must look like:' => 'For best delivery rates, your domain SPF record must look like:',
  'After you have added the DNS records for your domain, please click the Verify DNS records button below to verify your domain.' => 'After you have added the DNS records for your domain, please click the Verify DNS records button below to verify your domain.',
  'Please note that it can take up to 48 hours for DNS changes to propagate. If verification fails now, please try again later.' => 'Please note that it can take up to 48 hours for DNS changes to propagate. If verification fails now, please try again later.',
  'Verify DNS records' => 'Verify DNS records',
  'Customer' => 'Customer',
  'Sending domains' => 'Sending domains',
  'With sending domains you can verify the authenticity of the domain used in the campaigns FROM email field.' => 'With sending domains you can verify the authenticity of the domain used in the campaigns FROM email field.',
  'Verification is very simple, it involves adding just two DNS TXT records for the domain used in the FROM field of a campaign.' => 'Verification is very simple, it involves adding just two DNS TXT records for the domain used in the FROM field of a campaign.',
  'Once a sending domain is verified, all future campaigns sent from the verified domain will be DKIM signed and will pass SPF validation, thus giving a higher inbox delivery rate.' => 'Once a sending domain is verified, all future campaigns sent from the verified domain will be DKIM signed and will pass SPF validation, thus giving a higher inbox delivery rate.',
  'Your system misses a few PHP functions/extensions in order to use this feature.' => 'Your system misses a few PHP functions/extensions in order to use this feature.',
  'View sending domains' => 'View sending domains',
  'Create new sending domain' => 'Create new sending domain',
  'Update sending domain' => 'Update sending domain',
  'Unable to retrieve the TXT records for your domain name.' => 'Unable to retrieve the TXT records for your domain name.',
  'Unable to find proper TXT record for your domain name, if you just added the records please wait for them to propagate.' => 'Unable to find proper TXT record for your domain name, if you just added the records please wait for them to propagate.',
  'Your domain has been successfully verified.' => 'Your domain has been successfully verified.',
  'Domain' => 'Domain',
  'Domain name' => 'Domain name',
  'Dkim private key' => 'Dkim private key',
  'Dkim public key' => 'Dkim public key',
  'Locked' => 'Locked',
  'Verified' => 'Verified',
  'DKIM Signing' => 'DKIM Signing',
  'If this domain is verified in behalf of a customer, choose the customer.' => 'If this domain is verified in behalf of a customer, choose the customer.',
  'Domain name, i.e: example.com' => 'Domain name, i.e: example.com',
  'Set this to yes only if you already have DNS records set for this domain.' => 'Set this to yes only if you already have DNS records set for this domain.',
  'Whether this domain is locked and the customer cannot modify or delete it.' => 'Whether this domain is locked and the customer cannot modify or delete it.',
  'Whether we should use DKIM to sign outgoing campaigns for this domain.' => 'Whether we should use DKIM to sign outgoing campaigns for this domain.',
  'DKIM private key, leave this empty to be auto-generated. Please do not edit this record unless you really know what you are doing.' => 'DKIM private key, leave this empty to be auto-generated. Please do not edit this record unless you really know what you are doing.',
  'DKIM public key, leave this empty to be auto-generated. Please do not edit this record unless you really know what you are doing.' => 'DKIM public key, leave this empty to be auto-generated. Please do not edit this record unless you really know what you are doing.',
  'OpenSSL extension missing.' => 'OpenSSL extension missing.',
  '{func} function must be enabled in order to handle the DKIM keys.' => '{func} function must be enabled in order to handle the DKIM keys.',
  'Unable to create {dir} directory.' => 'Unable to create {dir} directory.',
  'While generating the private key, exec failed with: {fail}' => 'While generating the private key, exec failed with: {fail}',
  'Unknown error, most probably cannot exec the openssl command!' => 'Unknown error, most probably cannot exec the openssl command!',
  'Unable to check the private key file.' => 'Unable to check the private key file.',
  'While generating the public key, exec failed with: {fail}' => 'While generating the public key, exec failed with: {fail}',
  'Unable to check the public key file.' => 'Unable to check the public key file.',
  'You have reached the maximum number of allowed sending domains!' => 'You have reached the maximum number of allowed sending domains!',
);
