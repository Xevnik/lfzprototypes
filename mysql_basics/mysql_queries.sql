Place your queries below
feature set 1
SELECT * FROM `users` WHERE `username`='ckevin'

UPDATE `users` SET `email`='kevinc@email.com' WHERE `username`='ckevin'

INSERT INTO `users` SET `username` = 'I_am_the_night', `firstname` = 'bruce', `lastname` = 'wayne',
`email` = 'brucewayne@gotham.com', `password` = sha1('alfred'), `created`= NOW(), `status`='new'

DELETE FROM `users` WHERE `firstname`='bruce'

feature set 2
SELECT * FROM `todo_items` WHERE `user_id`=1

INSERT INTO `todo_items`(`title`, `details`, `user_id`) VALUES ('make spaghetti','dont forget the meatballs',1)

DELETE FROM `todo_items` WHERE `user_id`=3

UPDATE `todo_items` SET `details`= '@1200' WHERE `user_id`=4

SELECT * FROM `users`, `todo_items` WHERE `users`.`ID`=6 AND `users`.`id`=`todo_items`.`user_id`