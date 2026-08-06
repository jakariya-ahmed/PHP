<?php 
/**----------------------------  Phase 2 — Filtering & Searching
 ----------------------------   */

// Filter Electronics Category product with price range between 20 and 1000;
SELECT product_name, category, price FROM PRODUCTS
WHERE category = 'Electronics' 
AND price BETWEEN 20 and 100
AND discount IS NOT NULL;

//-- CORRECT: Use explicit parentheses to group OR logic
SELECT * FROM products 
WHERE (category = 'Tec' OR brand = 'Apple') AND price > 100;

// -- CORRECT: Add wildcard % to search for text starting with "tech"
SELECT * FROM categories WHERE category_name LIKE 'tech%';

//-- CORRECT: Filter out NULLs or use explicit IS NOT NULL conditions
SELECT * FROM users WHERE status NOT IN ('Active', 'Pending') AND status IS NOT NULL; 

// -- Query Unassigned Urgent/High Unresolved Tickets
SELECT ticket_id, ticket_title, ticket_priority, ticket_status
FROM tickets
WHERE assigned_agent_id IS NULL
AND status NOT IN ('Resolved', 'Closed')
AND priority IN ('High', 'Urgent');



/**----------------------------  Phase 3 —Functions ----------------------------   */

// Syntax: 
SELECT FUNCTION_NAME(column_name) FROM table_name WHERE condition;

SELECT CONCAT('first_name', ' ', 'last_name') AS full_name, LOWER(email) AS clean_email,
ROUND(salary / 12, 2) AS monthly_pay FROM employees;

01; 
//-- WRONG: SELECT tries to output 100 rows, but SUM() returns 1 row!
SELECT name, SUM(salary) FROM employees;
//-- CORRECT: Use aggregate functions alone OR group by the individual column (learned in Phase 4)
SELECT SUM(salary) FROM employees;


//-- DANGEROUS: If 20 users do not have a phone number, COUNT(phone) will be 80 while COUNT(*) is 100!
SELECT COUNT(phone) FROM users;
//-- CORRECT: Use COUNT(*) if you want total row count regardless of NULL values
SELECT COUNT(*) FROM users;


//-- WRONG: If last_name is NULL, full_name becomes NULL!
SELECT CONCAT(first_name, ' ', last_name) FROM users;
//-- CORRECT: Use COALESCE to provide a fall-back value for NULLs
SELECT CONCAT(first_name, ' ', COALESCE(last_name, '')) FROM users;

//-- 3. Query Financial Summary
SELECT COUNT(*) AS total_invoices, ROUND(SUM(amount * (1 + tax_rate)), 2) AS total_revenue,
ROUND(AVG((amount), 2)) AS average_invoice_amount, 
MIN(amount) AS min_invoice,
MAX(amount) AS max_invoice FROM invoices;



SELECT COUNT(*) AS total_orders, 
ROUND(SUM(amount (1 + tax_rate)), 2) AS total_revenue,
ROUND(AVG(amount), 2) AS average_order,
MIN() AS min_order,
MAX() AS max_order FROM orders;


/**----------------------------  Phase 4 — Grouping ----------------------------   */
// Syntax:
SELECT column_name, AGGREGATE_FUNCTION(another_column)
FROM table_name WHERE condition GROUP BY column_name
HAVING group_condition ORDER BY AGGREGATE_FUNCTION(another_column) DESC;


// Query Executed:
SELECT department, SUM(amount) AS total_sales, FROM sales
GROUP BY department HAVING SUM(amount) > 500 DESC;

//-- WRONG: WHERE runs before GROUP BY and cannot process SUM()!
SELECT customer_id, SUM(amount) FROM orders
WHERE SUM(amount) > 1000 GROUP BY customer_id;
//-- CORRECT: Use HAVING to filter aggregate results after grouping
SELECT customer_id, SUM(amount) FROM orders
GROUP BY customer_id HAVING SUM(amount) > 1000;

//-- BEST PRACTICE: Filter raw rows early with WHERE before grouping
SELECT category, COUNT(*) AS active_products FROM products WHERE status = 'Active'
GROUP BY category;

// Real Project Task

SELECT category, SUM(quantity) AS total_qty_sold,
    ROUND(SUM(price * quantity), 2) AS total_sales,
    COUNT(*) AS total_line_items
FROM order_items
GROUP BY category
HAVING SUM(price * quantity) > 1000
ORDER BY total_sales DESC;



/**----------------------------  Phase 5 — Joins ----------------------------   */
// Syntax:
SELECT T1.column_name, t2.column_name FROM table1 t1
JOIN table2 t2 ON t1.shared_id = t2.shared_id;

// Customer and Order tables inner join
SELECT customers.customer_name, orders.order_id, orders.amount
FROM customers INNER JOIN orders 
ON customers.customer_id = orders.customer_id;


SELECT customers.customer_name, orders.order_id, orders.amount
FROM customers INNER JOIN orders
ON customers.customer_id = orders.customer_id;














?>