CREATE TABLE Roles (
  Role_ID int,
  Description varchar  NOT NULL,
  PRIMARY KEY (Role_ID)
);

CREATE TABLE Users (
  User_ID int,
  Role_ID int NOT NULL,
  Username varchar,
  Password varchar,
  Organization varchar NOT NULL,
  First_Name varchar  NOT NULL,
  Last_Name varchar  NOT NULL,
  Phone_Number int,
  Email varchar,
  Notes text,
  PRIMARY KEY (User_ID), 
  FOREIGN KEY (Role_ID) REFERENCES Roles (Role_ID) 
);



CREATE TABLE Project_Types (
  Project_Type_ID int,
  Description varchar  NOT NULL,
  PRIMARY KEY (Project_Type_ID)
);

CREATE TABLE Steps_For_Each_Project_Type (
  Steps_ID int,
  Project_Type_ID int NOT NULL,
  Num_Of_Steps int  NOT NULL,
  Name_Step_1 varchar ,
  Approved_By_Customer_s1 bool,
  Name_Step_2 varchar,
  Approved_By_Customer_s2 bool,
  Name_Step_3 varchar,
  Approved_By_Customer_s3 bool,
  Name_Step_4 varchar,
  Approved_By_Customer_s4 bool,
  Name_Step_5 varchar,
  Approved_By_Customer_s5 bool,
  Name_Step_6 varchar,
  Approved_By_Customer_s6 bool,
  Name_Step_7 varchar,
  Approved_By_Customer_s7 bool,
  Name_Step_8 varchar,
  Approved_By_Customer_s8 bool,
  Name_Step_9 varchar,
  Approved_By_Customer_s9 bool,
  Name_Step_10 varchar,
  Approved_By_Customer_s10 bool,
  Name_Step_11 varchar,
  Approved_By_Customer_s11 bool,
  Name_Step_12 varchar,
  Approved_By_Customer_s12 bool,
  Name_Step_13 varchar,
  Approved_By_Customer_s13 bool,
  Name_Step_14 varchar,
  Approved_By_Customer_s14 bool,
  Name_Step_15 varchar,
  Approved_By_Customer_s15 bool,
  PRIMARY KEY (Project_Steps_ID), 
  FOREIGN KEY (Project_Type_ID) REFERENCES Project_Types (Project_Type_ID)
);

CREATE TABLE Project_Status (
  Project_Status_ID int,
  Project_Steps_ID int NOT NULL,
  Num_Of_Steps int   NOT NULL,
  Approved_Step_1 bool,
  Approved_Step_2 bool,
  Approved_Step_3 bool,
  Approved_Step_4 bool,
  Approved_Step_5 bool,
  Approved_Step_6 bool,
  Approved_Step_7 bool,
  Approved_Step_8 bool,
  Approved_Step_9 bool,
  Approved_Step_10 bool,
  Approved_Step_11 bool,
  Approved_Step_12 bool,
  Approved_Step_13 bool,
  Approved_Step_14 bool,
  Approved_Step_15 bool,
  PRIMARY KEY (Project_Status_ID), 
  FOREIGN KEY (Project_Steps_ID) REFERENCES Project_Steps (Project_Steps_ID)
);

CREATE TABLE Projects (
  Project_ID int,
  Project_Type_ID int NOT NULL,
  Admin_ID int NOT NULL,
  Customer_ID int NOT NULL,
  Project_Steps_ID int NOT NULL,
  Project_Status_ID int NOT NULL,
  Is_Active boolean NOT NULL,
  Project_Name varchar  NOT NULL,
  Description varchar  NOT NULL,
  PRIMARY KEY (Project_ID),
  FOREIGN KEY (Project_Type_ID) REFERENCES Project_Types (Project_Type_ID),
  FOREIGN KEY (Admin_ID) REFERENCES Users (User_ID), 
  FOREIGN KEY (Customer_ID) REFERENCES Users (User_ID), 
  FOREIGN KEY (Project_Steps_ID) REFERENCES Project_Steps (Project_Steps_ID),
  FOREIGN KEY (Project_Status_ID) REFERENCES Project_Status (Project_Status_ID) 
);

CREATE SEQUENCE Roles_Sequence START 1001;
CREATE SEQUENCE Users_Sequence START 1001;
CREATE SEQUENCE Project_Types_Sequence START 1001;
CREATE SEQUENCE Steps_For_Each_Project_Type_Sequence START 1001;
CREATE SEQUENCE Project_Status_Sequence START 1001;
CREATE SEQUENCE Projects_Sequence START 1001;


/* Run This query to check all foreign keys of a table*/
/*******************************************************************
SELECT
    tc.table_schema, 
    tc.constraint_name, 
    tc.table_name, 
    kcu.column_name, 
    ccu.table_schema AS foreign_table_schema,
    ccu.table_name AS foreign_table_name,
    ccu.column_name AS foreign_column_name 
FROM 
    information_schema.table_constraints AS tc 
    JOIN information_schema.key_column_usage AS kcu
      ON tc.constraint_name = kcu.constraint_name
      AND tc.table_schema = kcu.table_schema
    JOIN information_schema.constraint_column_usage AS ccu
      ON ccu.constraint_name = tc.constraint_name
      AND ccu.table_schema = tc.table_schema
WHERE tc.constraint_type = 'FOREIGN KEY' AND tc.table_name='mytable';
*********************************************************************/


/* Run this to reset the database*/
/*******************************************************************
Drop Table project_status, project_steps, project_types, projects, roles, users;
DROP SEQUENCE Roles_Sequence;
DROP SEQUENCE Users_Sequence;
DROP SEQUENCE Project_Types_Sequence;
DROP SEQUENCE Project_Steps_Sequence;
DROP SEQUENCE Project_Status_Sequence;
DROP SEQUENCE Projects_Sequence;
*********************************************************************/