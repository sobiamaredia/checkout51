<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200830044505 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql("INSERT INTO offer (name, image_url, cash_back) VALUES ('Buy 2: Select TRISCUIT Crackers', 
        'https://d3bx4ud3idzsqf.cloudfront.net/public/production/6840/67561_1535141624.jpg',  1.5);");

        $this->addSql("INSERT INTO offer (name, image_url, cash_back) VALUES ('Tide Liquid Detergent', 
        'https://d3bx4ud3idzsqf.cloudfront.net/public/production/4902/56910_1527084051.jpg',  1.9);");

        $this->addSql("INSERT INTO offer (name, image_url, cash_back) VALUES ('Dawn', 
        'https://d3bx4ud3idzsqf.cloudfront.net/public/production/1795/10751_1439567381',  2.6);");

        $this->addSql("INSERT INTO offer (name, image_url, cash_back) VALUES 
        ('Dove Shower Foam or Dove Men+Care Foaming Body Wash', 
        'https://d3bx4ud3idzsqf.cloudfront.net/public/production/7754/68780_1536591544.jpg',  2.0);");
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
