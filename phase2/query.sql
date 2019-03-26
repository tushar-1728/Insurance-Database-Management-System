select name,city,state from agent, address where agent.ssn=address.ssn and state='Florida';
select ssn,fname,lname from customer, customer_policy where customer.policy_num = customer_policy.policy_num;
select ssn,fname,lname from customer, claim where customer.policy_num = claim.policy_num;
select customer.ssn,fname,lname,customer.policy_num from customer, payment where customer.ssn = payment.ssn and payment_no > 2;
select name, password from agent, agnt_password where agent.ssn = agnt_password.ssn;