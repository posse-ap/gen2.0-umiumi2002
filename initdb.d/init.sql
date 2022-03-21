DROP SCHEMA IF EXISTS ph2_webapp;
CREATE SCHEMA ph2_webapp;
use ph2_webapp;

DROP TABLE IF EXISTS webapps;
CREATE TABLE webapps (
  id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  study_date DATETIME,
  study_time INT,
  study_language  varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  study_content  varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
);

INSERT INTO webapps (study_date,study_time,study_language,study_content) VALUES 
("2022-03-01",1,"PHP","ドットインストール"),
("2022-03-02",4,"HTML","ドットインストール"),
("2022-03-03",6,"JavaScript","ドットインストール"),
("2022-03-04",7,"PHP","ドットインストール"),
("2022-03-05",2,"Laravel","ドットインストール"),
("2022-03-06",4,"SQL","ドットインストール"),
("2022-03-07",3,"SHELL","ドットインストール"),
("2022-03-09",5,"情報システム基礎知識","ドットインストール"),
("2022-03-11",3,"HTML","ドットインストール"),
("2022-03-12",5,"CSS","ドットインストール"),
("2022-03-13",4,"JavaScript","ドットインストール"),
("2022-03-14",1,"PHP","ドットインストール"),
("2022-03-15",1,"PHP","ドットインストール"),
("2022-03-20",1,"Laravel","ドットインストール"),
("2022-03-21",1,"PHP","ドットインストール"),
("2022-03-22",3,"PHP","ドットインストール"),
("2022-03-23",1,"PHP","ドットインストール"),
("2022-03-24",1,"PHP","ドットインストール"),
("2022-03-25",1,"PHP","ドットインストール"),
("2022-03-26",6,"PHP","ドットインストール"),
("2022-03-27",7,"PHP","ドットインストール"),
("2022-03-28",4,"PHP","ドットインストール"),
("2022-03-29",3,"PHP","ドットインストール"),
("2022-03-30",2,"PHP","ドットインストール"),
("2022-03-31",9,"PHP","ドットインストール"),
("2022-04-01",9,"PHP","ドットインストール");


-- mysql -u root -p < /docker-entrypoint-initdb.d/init.sqlで更新可能