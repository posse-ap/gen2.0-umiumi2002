DROP SCHEMA IF EXISTS ph2_quizy;
CREATE SCHEMA ph2_quizy;
USE ph2_quizy;

-- prefecturesテーブル
DROP TABLE IF EXISTS prefectures;
-- もし存在していたらデータベースを削除
CREATE TABLE prefectures(
  id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  -- 固有のもの
  name varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
);

INSERT INTO prefectures (name) VALUES
('東京の難読地名クイズ'),
('広島県の難読地名クイズ');
-- (3,'aaaaa');


-- questionsテーブル
-- DROP TABLE IF EXISTS questions;
-- CREATE TABLE questions (
--   id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
--   prefecture_id INT NOT NULL,
--   -- 'order' NOT NULL,
--   name varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
-- );

-- INSERT INTO questions (prefecture_id,name) VALUES
-- (1,'高輪'),
-- (1,'亀戸'),
-- (2,'向洋');




-- choicesテーブル
DROP TABLE IF EXISTS choices;
CREATE TABLE choices(
  id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  prefecture_id INT NOT NULL,
  question_id INT NOT NULL,
  name varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  correct INT NOT NULL,
  choice_id INT NOT NULL
);

INSERT INTO choices (prefecture_id,question_id,name,correct,choice_id) VALUES
(1,1,'たかなわ',1,1),
(1,1,'たかわ',0,2),
(1,1,'わ',0,3),
(1,2,'かめいど',1,1),
(1,2,'あああ',0,2),
(1,2,'いいい',0,3),
(2,1,'むこうひら',0,1),
(2,1,'むきひら',0,2),
(2,1,'むかいなだ',1,3);


-- desc table名; カラムの中身を確認できる


