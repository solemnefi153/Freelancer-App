CREATE TABLE roles (
  role_id int NOT NULL UNIQUE,
  description varchar  NOT NULL UNIQUE,
  PRIMARY KEY (role_id)
);

CREATE TABLE users (
  user_id int NOT NULL UNIQUE,
  role_id int NOT NULL,
  username varchar UNIQUE,
  password varchar,
  organization varchar NOT NULL,
  first_name varchar  NOT NULL,
  last_name varchar  NOT NULL,
  phone_number varchar,
  email varchar,
  notes text,
  PRIMARY KEY (user_id), 
  FOREIGN KEY (role_id) REFERENCES roles (role_id), 
);

CREATE TABLE project_types (
  project_type_id int UNIQUE,
  Description varchar  NOT NULL UNIQUE,
  PRIMARY KEY (project_type_id)
);

CREATE TABLE steps_for_each_project_type (
  steps_id int NOT NULL,
  project_type_id int NOT NULL,
  num_of_steps int  NOT NULL,
  name_step_1 varchar ,
  approved_by_customer_s1 bool,
  name_step_2 varchar,
  approved_by_customer_s2 bool,
  name_step_3 varchar,
  approved_by_customer_s3 bool,
  name_step_4 varchar,
  approved_by_customer_s4 bool,
  name_step_5 varchar,
  approved_by_customer_s5 bool,
  name_step_6 varchar,
  approved_by_customer_s6 bool,
  name_step_7 varchar,
  approved_by_customer_s7 bool,
  name_step_8 varchar,
  approved_by_customer_s8 bool,
  name_step_9 varchar,
  approved_by_customer_s9 bool,
  name_step_10 varchar,
  approved_by_customer_s10 bool,
  name_step_11 varchar,
  approved_by_customer_s11 bool,
  name_step_12 varchar,
  approved_by_customer_s12 bool,
  name_step_13 varchar,
  approved_by_customer_s13 bool,
  name_step_14 varchar,
  approved_by_customer_s14 bool,
  name_step_15 varchar,
  approved_by_customer_s15 bool,
  PRIMARY KEY (steps_id), 
  FOREIGN KEY (project_type_id) REFERENCES project_Types (project_type_id)
);

CREATE TABLE project_status (
  project_status_id int NOT NULL,
  steps_id int NOT NULL,
  num_of_steps int   NOT NULL,
  approved_step_1 boolean,
  approved_step_2 boolean,
  approved_step_3 boolean,
  approved_step_4 boolean,
  approved_step_5 boolean,
  approved_step_6 boolean,
  approved_step_7 boolean,
  approved_step_8 boolean,
  approved_step_9 boolean,
  approved_step_10 boolean,
  approved_step_11 boolean,
  approved_step_12 boolean,
  approved_step_13 boolean,
  approved_step_14 boolean,
  approved_step_15 boolean,
  PRIMARY KEY (project_status_id), 
  FOREIGN KEY (steps_id) REFERENCES steps_for_each_project_type (steps_id)
);

CREATE TABLE projects (
  project_id int,
  project_type_id int NOT NULL,
  admin_id int NOT NULL,
  customer_id int NOT NULL,
  steps_id int NOT NULL,
  project_status_id int NOT NULL,
  is_active boolean NOT NULL,
  project_name varchar  NOT NULL,
  Description varchar  NOT NULL,
  PRIMARY KEY (project_id),
  FOREIGN KEY (project_type_id) REFERENCES project_types (project_type_id),
  FOREIGN KEY (admin_id) REFERENCES users (user_id), 
  FOREIGN KEY (customer_id) REFERENCES users (user_id), 
  FOREIGN KEY (steps_id) REFERENCES steps_for_each_project_type (steps_id),
  FOREIGN KEY (project_status_id) REFERENCES project_status (project_status_id) 
);

CREATE SEQUENCE roles_sequence START 1001;
CREATE SEQUENCE users_sequence START 1001;
CREATE SEQUENCE project_types_sequence START 1001;
CREATE SEQUENCE steps_for_each_project_type_sequence START 1001;
CREATE SEQUENCE project_status_sequence START 1001;
CREATE SEQUENCE projects_sequence START 1001;

/*Necesary Insert Statements*/
INSERT INTO roles VALUES (
  nextval('roles_sequence'),
  'admin'
);

INSERT INTO roles VALUES (
  nextval('roles_sequence'),
  'client'
);






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
Drop Table project_status, Steps_For_Each_Project_Type, project_types, projects, roles, users;
DROP SEQUENCE Roles_Sequence;
DROP SEQUENCE Users_Sequence;
DROP SEQUENCE Project_Types_Sequence;
DROP SEQUENCE Steps_For_Each_Project_Type_Sequence;
DROP SEQUENCE Project_Status_Sequence;
DROP SEQUENCE Projects_Sequence;
*********************************************************************/