# apache_tls_rtt
Implementing TLS RTT in apache

## Status
PR was accepted (@notroj was extremely helpful) and merged. https://github.com/apache/httpd/commit/79990b070f2e5374e1add982342b1fa71f5d189e

Target release unknown.

## Demonstration
A patch that can be applied to existing distribution packages is provided.

#### Instructions for Ubuntu 24.10 or higher
Follow instructions here for rebuilding apache2 debian package: https://www.linuxjournal.com/content/rebuilding-and-modifying-debian-packages

  - Get the source packages for apache2
  - Put in anything you want in changelog message
  - At the editing files step, copy the patch file to debian/patches/ and append the filename to serial
  - If you have problems with build, simply delete test/clients/Makefile

#### Prebuilt packages
It's a really bad idea to install unsigned, binary packages from unofficial sources, but for those that prefer the YOLO approach, download and install the provided .deb files with dpkg -i.


