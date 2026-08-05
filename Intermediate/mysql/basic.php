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




















?>