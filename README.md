# apache_tls_rtt
Implementing TLS RTT in apache

## Status
PR was merged (@notroj was extremely helpful). https://github.com/apache/httpd/commit/79990b070f2e5374e1add982342b1fa71f5d189e

Target release version unknown.

## Testing
Limited testing revealed very accurate results, this appears to function as expected.

## Demonstration
A patch that can be applied to existing distribution packages is provided. Note that OpenSSL > 3.2 is needed for proper operation.

#### Instructions for Ubuntu 24.10 or higher
Follow instructions here for rebuilding apache2 debian package: https://www.linuxjournal.com/content/rebuilding-and-modifying-debian-packages

  - Get the source packages for apache2
  - At the editing files step, copy the patch file to debian/patches/ and append the filename to serial
  - Put in anything you want in changelog message
  - If you have problems with build, simply delete test/clients/Makefile

#### Prebuilt packages for ubuntu 24.10
It's a really bad idea to install unsigned, binary packages from unofficial sources. Simply download and install the provided .deb files with dpkg -i.

#### PHP script
Enable mod_ssl and default ssl site. Install libapache2-mod-php and copy php script to /var/html/www, delete index.html. Script shows TLS RTT in microseconds.

