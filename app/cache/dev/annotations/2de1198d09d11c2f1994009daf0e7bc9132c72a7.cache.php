<?php return unserialize('a:4:{i:0;O:27:"Doctrine\\ORM\\Mapping\\Entity":2:{s:15:"repositoryClass";N;s:8:"readOnly";b:0;}i:1;O:26:"Doctrine\\ORM\\Mapping\\Table":5:{s:4:"name";s:8:"user_one";s:6:"schema";N;s:7:"indexes";N;s:17:"uniqueConstraints";N;s:7:"options";a:0:{}}i:2;O:55:"PUGX\\MultiUserBundle\\Validator\\Constraints\\UniqueEntity":9:{s:7:"service";s:25:"pugx.orm.validator.unique";s:11:"targetClass";s:28:"MyApp\\UserBundle\\Entity\\User";s:7:"message";s:30:"fos_user.username.already_used";s:2:"em";N;s:16:"repositoryMethod";s:6:"findBy";s:6:"fields";s:8:"username";s:9:"errorPath";N;s:10:"ignoreNull";b:1;s:6:"groups";a:1:{i:0;s:7:"Default";}}i:3;O:55:"PUGX\\MultiUserBundle\\Validator\\Constraints\\UniqueEntity":9:{s:7:"service";s:25:"pugx.orm.validator.unique";s:11:"targetClass";s:28:"MyApp\\UserBundle\\Entity\\User";s:7:"message";s:27:"fos_user.email.already_used";s:2:"em";N;s:16:"repositoryMethod";s:6:"findBy";s:6:"fields";s:5:"email";s:9:"errorPath";N;s:10:"ignoreNull";b:1;s:6:"groups";a:1:{i:0;s:7:"Default";}}}');