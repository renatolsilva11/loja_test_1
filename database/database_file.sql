CREATE DATABASE IF NOT EXISTS DB_COMPANY DEFAULT CHARACTER SET UTF8;

-- USE DB_COMPANY ;


CREATE TABLE DB_COMPANY.EMPLOYERS (
    EMPLOYER_NAME VARCHAR(50) NOT NULL,
    BIRTH_DATE DATETIME NOT NULL,
    ADMISSION_DATE DATETIME NOT NULL,
    OCCUPATION VARCHAR(50) NOT NULL,
    ID_EMPLOYER INT PRIMARY KEY AUTO_INCREMENT NOT NULL
);
