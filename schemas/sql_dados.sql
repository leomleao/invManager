INSERT INTO `roles` (`roleDesc`) VALUES 
('Administrator'),
('General Manager'),
('Manager'),
('Supervisor'),
('user');

INSERT INTO `departments` (`departmentName`) VALUES 
('Administrativo'),
('Diretoria'),
('Engenharia'),
('Marketing'),
('TI'),
('Vendas Externas'),
('Vendas Internas');
   default);

INSERT INTO `users` (`userUser`, `userName`   , `userDepartmentID`, `userPassword`, `userLastKnownPassword` , `userEmail`           , `userPicturePath`, `userRoleID`, `userStatus`) 
VALUES              ('u225721' ,'Brian Silva' ,1                  ,''             , ''                      ,'brian.silva@wago.com' ,''                ,1            , default);

INSERT INTO `users` (`userUser`, `userName`     , `userDepartmentID`, `userPassword`, `userLastKnownPassword` ,`userEmail`             , `userPicturePath`, `userRoleID`, `userStatus`) 
VALUES              ('u228820' ,'Leonardo Leao' ,1                  ,''             ,''                       ,'leonardo.leao@wago.com' ,''                ,1            , default);


