# Random SMTP for Mautic

Random SMTP server support for Mautic

### Installation
1- Place this customized plugin folder within current mautic folder plugins folder.
2- Add  "mautic/mautic-random-smtp-bundle": "self.version", within replace object in composer.json file.
3- Go to /s/plugins/reload or click Install/reload for 
4- See Mautic Random SMTP plugin within plugins listing. 

### Setup plugin

#### Plugin configuration

1. Paste SMTP servers to plugins setting (comma separated list of SMTP servers on each line)

You can use columns:

  - host
  - username
  - password
  - port - Is not required. Default is 25
  - authenitication mode - is not required. Default is none. Other options are plain, login or cram-md5
  - encryption - is not required. Default is none. Other options are ssl or tls


