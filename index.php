<?php
 // $keys = array('HTTPS', 'SSL_PROTOCOL', 'SSL_SESSION_ID', 'SSL_SESSION_RESUMED', 'SSL_SECURE_RENEG', 'SSL_CIPHER', 'SSL_CIPHER_EXPORT', 'SSL_CIPHER_USEKEYSIZE', 'SSL_CIPHER_ALGKEYSIZE', 'SSL_COMPRESS_METHOD', 'SSL_VERSION_INTERFACE', 'SSL_VERSION_LIBRARY', 'SSL_SERVER_M_VERSION', 'SSL_SERVER_M_SERIAL', 'SSL_SERVER_S_DN', 'SSL_SERVER_I_DN', 'SSL_SERVER_V_START', 'SSL_SERVER_V_END', 'SSL_SERVER_A_SIG', 'SSL_SERVER_A_KEY', 'SSL_SERVER_CERT', 'SSL_TLS_SNI', 'SSL_HANDSHAKE_RTT');
  
  //foreach ($keys as $key)
  
//echo $key." ".apache_getenv($key)."<br />\n";
  echo '{"SSL_SESSION_ID": "'.apache_getenv('SSL_SESSION_ID').'",';
  echo '"SSL_VERSION_LIBRARY": "'.apache_getenv('SSL_VERSION_LIBRARY').'",';
  echo '"APACHE_VERSION": "'.apache_get_version().'",';
  echo '"SSL_HANDSHAKE_RTT": "'.apache_getenv('SSL_HANDSHAKE_RTT').'"}';
?>
