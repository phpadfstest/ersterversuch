<?php
$metadata['http://w2k12r2.test.de/adfs/services/trust'] = array (
  'entityid' => 'http://w2k12r2.test.de/adfs/services/trust',
  'contacts' => 
  array (
  ),
  'metadata-set' => 'saml20-idp-remote',
  'SingleSignOnService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://w2k12r2.test.de/adfs/ls/',
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://w2k12r2.test.de/adfs/ls/',
    ),
  ),
  'SingleLogoutService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://w2k12r2.test.de/adfs/ls/',
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://w2k12r2.test.de/adfs/ls/',
    ),
  ),
  'ArtifactResolutionService' => 
  array (
  ),
  'NameIDFormats' => 
  array (
    0 => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
    1 => 'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
    2 => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
  ),
  'keys' => 
  array (
    0 => 
    array (
      'encryption' => true,
      'signing' => false,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIC4DCCAcigAwIBAgIQO9bGvqYST6JEC3XLTuOILzANBgkqhkiG9w0BAQsFADAsMSowKAYDVQQDEyFBREZTIEVuY3J5cHRpb24gLSB3MmsxMnIyLnRlc3QuZGUwHhcNMTcwNzE1MjEzNzI2WhcNMTgwNzE1MjEzNzI2WjAsMSowKAYDVQQDEyFBREZTIEVuY3J5cHRpb24gLSB3MmsxMnIyLnRlc3QuZGUwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQCPdl97cwq87pBJzd3F/L/G7ooOjNusmlWBcnQkWJli2BpakZHkbFE4/65u9S61v+GIFZ2TpTrgWopldjzda3AHGp2Ozk5abqKb8+Zves1lEGKkMXsR/Nr+o7+b4gCZVX0J4bQHZlz+PpP/qhb/Qo6O2KJ/Wfow0lt7QPd6DBIYtHCjr64AOCQGvi5hnKAYb/Kfu7WQPeIC9ZsnVHuPNehgcLIav4YmS1cv6jOsO/Dv47xSkArojJkKu5GHPjwbiU3Q2t+4VpBwEjUAbe7deqTB7cMT44KygbAcn51yMJlB8m5eoB/pBkiZLLSP3ZI+jaWgXMDpaZZjwts9u2Xib4ENAgMBAAEwDQYJKoZIhvcNAQELBQADggEBAAdSh2w8jOTiT7N2zOLQ/lU/6hqUwfBwOXHeyeTGAG8s0k2ZV9R7BpK2dfyrbXaknk2MOHVbTL8qYyEEJiIPUVQd5L7pmDucR4fRCrXmjeHrP6hqOpuG2NqcCIhqXgM8zaFTIRCuFqyFpeBqVveWeS/Mewjk/nJUYddczrFG9neUNjXomBxHRtfB/Swr3XeW60fzBdSQU0LFW7PQxZer0/0XzIp02RXKnSFl4PWjBCLC6lQmUI8bLzrAHa4wf53315KuaYObnXt+lk9ehuExqgoy2vC4aPdlOyQ9sjWITyhKRmu6CaTBHaZem3o7AJYRCEFbU9ml2or8mxdHyNel6uA=',
    ),
    1 => 
    array (
      'encryption' => false,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIC2jCCAcKgAwIBAgIQUZtHoMYofYNLzDRlO+J6UzANBgkqhkiG9w0BAQsFADApMScwJQYDVQQDEx5BREZTIFNpZ25pbmcgLSB3MmsxMnIyLnRlc3QuZGUwHhcNMTcwNzE1MjEzNzI1WhcNMTgwNzE1MjEzNzI1WjApMScwJQYDVQQDEx5BREZTIFNpZ25pbmcgLSB3MmsxMnIyLnRlc3QuZGUwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQCmTM9Mfnamrq+oQBixFj+FRnwkDqkIgBVDCLoORdsi4kQQJtFqoqrfEvuDoA0Ma5Z6dlJjri/Fw5v59IOFIng1L1Sf9SsS4U9lSEl8Lie0GsnrbcfkunQ2UsOdi/R/JldHLMxe16ijcK0LPSz1pAhmixfMVxtoOXkz3+jKilivyu5r32tX9GE4fAkDMh35xWVkVrW4ouNQOW8Idy6bvuFVQ6/XnK2lgJZ5Gmm00hzxZ38p7P8qYA6aleNk+4Gdup5ECbfz3hYHd1rUURXurUmocgeaXSKEknZgzij6yz/8rr7ABfe+NxFNmgFCssbQesE3CzZZw2PNYwF6eOsWsWJ9AgMBAAEwDQYJKoZIhvcNAQELBQADggEBAI+uOei+Cdu2pz6c6DLvoEdYdGPJLsQcLnlB9mYhTPPIYr5BFud4V17DknwOaTkLKeYVDKbI3N0pkd8f5HIn7O4p0L3iHXePrPSUSZrHCuPmorjTHDVZ7DZrq9pdpSearWlGHFvvJ7dqDfqPoLjAdYZWPWQEi+8BOR2N5qgnjeRgJ5lHV20056belBDO/o1qWzoD1PwVTOdgqaxi8I+y2kc5DeBgC0VfFytTR7TyXFEE/+d9ChrpRN+2YnrAxJXjuon6lMF4Eg2thY34KMqCvcZzpbOPSZvI5QElvYcOedBv/oZStXlc0+26KbvLqMv4PIItst60cq+LRprQ5J6Iyrc=',
    ),
  ),
);
?>
