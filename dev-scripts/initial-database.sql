CREATE DATABASE `checkout51`;

CREATE TABLE checkout51.offer (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(200) NOT NULL, image_url VARCHAR(255) DEFAULT NULL,
cash_back DOUBLE PRECISION NOT NULL, PRIMARY KEY(id))
DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;


INSERT INTO `checkout51`.`offer` (`name`, `image_url`, `cash_back`) VALUES ('Buy 2: Select TRISCUIT Crackers',
        'https://d3bx4ud3idzsqf.cloudfront.net/public/production/6840/67561_1535141624.jpg',  1.5);

INSERT INTO `checkout51`.`offer` (`name`, `image_url`, `cash_back`) VALUES ('Tide Liquid Detergent',
        'https://d3bx4ud3idzsqf.cloudfront.net/public/production/4902/56910_1527084051.jpg',  1.9);

INSERT INTO `checkout51`.`offer` (`name`, `image_url`, `cash_back`) VALUES ('Dawn',
        'https://d3bx4ud3idzsqf.cloudfront.net/public/production/1795/10751_1439567381',  2.6);

INSERT INTO `checkout51`.`offer` (`name`, `image_url`, `cash_back`) VALUES
        ('Dove Shower Foam or Dove Men+Care Foaming Body Wash',
        'https://d3bx4ud3idzsqf.cloudfront.net/public/production/7754/68780_1536591544.jpg',  2.0);