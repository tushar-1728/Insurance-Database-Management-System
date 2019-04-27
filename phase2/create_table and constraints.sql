create table ADDRESS
(
	Ssn CHAR(10) NOT NULL PRIMARY KEY,
	City varchar(7),
	Zip Int,
	State varchar(15)
);

CREATE TABLE AGENT
(
	Name varchar(35), 
	Ssn CHAR(10) NOT NULL PRIMARY KEY,
	Salary decimal(12,2),
	Commission decimal(12,2),
	Num_of_policy_done int
);

create table CUSTOMER
(
	Ssn CHAR(10) NOT NULL PRIMARY KEY,
	Fname VARCHAR(15) NOT NULL ,
	Minit CHAR, 
	Lname VARCHAR(15) NOT NULL,
	DOB date,
	Income decimal(12,2),
	Policy_num int unique,
	Phone int,
	Agent_id char(10),
	Purchase_date date,
	Claim_num int
);

create table Agnt_password
(
	Ssn char(10) primary key,
	Password varchar(15) unique
);

create table Cust_password
(
	Ssn char(10) primary key,
	Password varchar(15) unique
);

create table POLICY
(
	Policy_id int primary key,
	Name varchar(25),
	Type varchar(10),
	Term_price decimal(9,2),
	Term_period int,
	Coverage decimal(12,2)
);

create table Payment
(
	Payment_no int primary key,
	Ssn char(10),
	Payment_data date,
	Amount decimal(8,2),
	Policy_num int
);

create table Claim
(
	Claim_id int primary key,
	Policy_num int,
	Claim_date date,
	Sanc_date date,
	Sanc_amount decimal(7,2),
	Cheaque_no int,
	Reason varchar(255)
);

create table cust_policy
(
	Policy_num int primary key,
	Policy_id int,
	Type varchar(15),
	Registration_no int(15),
	Valuation decimal(12,2),
	Sum_assured decimal(12,2)
);

/*use information_schema;
select * from key_column_usage where constraint_schema = 'insurance';*/

alter table customer add constraint fk1 foreign key (agent_id) references agent(Ssn);

alter table address add constraint fk2 foreign key(ssn) references agent(Ssn);

alter table cust_policy add constraint fk3 foreign key(Policy_num) references customer(Policy_num);

alter table Payment add constraint fk4 foreign key(Ssn) references customer(ssn);

alter table customer add constraint fk5 foreign key(claim_num) references claim(claim_id);

alter table cust_policy add constraint fk6 foreign key(policy_id) references policy(policy_id);

alter table Agnt_password add constraint fk7 foreign key(ssn) references agent(ssn);

alter table Cust_password add constraint fk8 foreign key(ssn) references customer(ssn);