
INSERT INTO `product_type` (`type_value`, `attribute_name`)
VALUES 
	('DVD', 'size'),
	('BOOK', 'weight'),
	('FURNITURE', 'Dimensions');


INSERT INTO `product_list` (`sku`, `product_name`, `price`, `type_id`, `attribute_value`)
VALUES 
	('SD1300', 'SAMSUNG DVD', '5.99', '1', '700 MB'),				-- 1
	('PD59W5R6', 'PANASONIC DVD', '6.01', '1', '500 MB'),			-- 2
	('PHD5400E', 'PHILIPS DVD', '100', '1', '900 MB'),				-- 3
	('CH03310KL', 'CHAIR', '90.9', '3', '10x10x10'),				-- 4
	('LOTR4063RE', 'LORD OF THE RINGS', '9.99', '2', '2 MB'),		-- 5
	('GOT40OO7KMK', 'GAME OF THRONES', '10.99', '2', '4KG'),		-- 6
	('SD13080', 'SAMSUNG DVD', '5.99', '1', '700 MB'),				-- 7
	('PD59W9R6', 'PANASONIC DVD', '6.01', '1', '500 MB'),			-- 8
	('PHD5000E', 'PHILIPS DVD', '100', '1', '900 MB'),				-- 9
	('CH03170KL', 'CHAIR', '90.9', '3', '10x10x10'),				-- 10
	('LOTR4603RE', 'LORD OF THE RINGS', '9.99', '2', '2KG'),		-- 11
	('PHD5070E', 'PHILIPS DVD', '100', '1', '900 MB'),				-- 12
	('CH031860KL', 'CHAIR', '90.9', '3', '10x10x10'),				-- 13
	('LOTR40883RE', 'LORD OF THE RINGS', '9.99', '2', '2KG'),		-- 14
	('GOT40OO88KMK', 'GAME OF THRONES', '10.99', '2', '4KG'),		-- 15
	('SD130890', 'SAMSUNG DVD', '5.99', '1', '700 MB'),				-- 16
	('PD590WR6', 'PANASONIC DVD', '6.01', '1', '500 MB'),			-- 17
	('PHD5000E', 'PHILIPS DVD', '100', '1', '900 MB'),				-- 18
	('CH03100KL', 'CHAIR', '90.9', '3', '10x10x10'),				-- 19
	('LOTR4003R0E', 'LORD OF THE RINGS', '9.99', '2', '2KG'),		-- 20
	('GOT40OO000KMK', 'GAME OF THRONES', '10.99', '2', '4KG');		-- 21