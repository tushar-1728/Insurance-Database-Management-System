1) To select the name and address of the agents who work in florida
select name,city,state from agent, address where agent.ssn=address.ssn and state='Florida';

2)To select ssn first name and last name of customers with active policies
select ssn,fname,lname from customer, customer_policy where customer.policy_num = customer_policy.policy_num;

3)To select ssn first name and last name of customers who have claimed their policies
select ssn,fname,lname from customer, claim where customer.policy_num = claim.policy_num;

4)To select ssn first name and last name of customers who have made payments more than once
select customer.ssn,fname,lname,customer.policy_num from customer, payment where customer.ssn = payment.ssn and payment_no > 2;

5)To select name and password of the agents
select name, password from agent, agnt_password where agent.ssn = agnt_password.ssn;

6)To select names of agent who work in texas
select name from agent where ssn in ( select ssn from address where state='Texas');

7)To select maximum salary
select max(salary) from agent;

8)To select the second highest salary
select max(salary)from agent where salary not in (select max(salary) from agent);

9)To select first name and last name of the customers who have agent associated with them
select c.fname,c.lname from (customer as c join (agent as a))where c.agent_id = a.ssn;

10)To get the number of people who work in the state of Florida
select count(name),state from agent group by state where state='Florida';