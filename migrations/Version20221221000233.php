<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221221000233 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE day_trip_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE hideout_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE picture_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE trip_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE day_trip (id INT NOT NULL, trip_id INT NOT NULL, name VARCHAR(255) NOT NULL, date DATE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_DD3E184DA5BC2E0E ON day_trip (trip_id)');
        $this->addSql('CREATE TABLE day_trip_hideout (day_trip_id INT NOT NULL, hideout_id INT NOT NULL, PRIMARY KEY(day_trip_id, hideout_id))');
        $this->addSql('CREATE INDEX IDX_F1DBD8845D795E8C ON day_trip_hideout (day_trip_id)');
        $this->addSql('CREATE INDEX IDX_F1DBD884E9982FD7 ON day_trip_hideout (hideout_id)');
        $this->addSql('CREATE TABLE hideout (id INT NOT NULL, name VARCHAR(255) NOT NULL, lat VARCHAR(255) DEFAULT NULL, lng VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE picture (id INT NOT NULL, day_trip_id INT NOT NULL, name VARCHAR(255) NOT NULL, shot_time TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, url VARCHAR(255) NOT NULL, lat VARCHAR(255) NOT NULL, lng VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_16DB4F895D795E8C ON picture (day_trip_id)');
        $this->addSql('CREATE TABLE trip (id INT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE messenger_messages (id BIGSERIAL NOT NULL, body TEXT NOT NULL, headers TEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, available_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, delivered_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_75EA56E0FB7336F0 ON messenger_messages (queue_name)');
        $this->addSql('CREATE INDEX IDX_75EA56E0E3BD61CE ON messenger_messages (available_at)');
        $this->addSql('CREATE INDEX IDX_75EA56E016BA31DB ON messenger_messages (delivered_at)');
        $this->addSql('CREATE OR REPLACE FUNCTION notify_messenger_messages() RETURNS TRIGGER AS $$
            BEGIN
                PERFORM pg_notify(\'messenger_messages\', NEW.queue_name::text);
                RETURN NEW;
            END;
        $$ LANGUAGE plpgsql;');
        $this->addSql('DROP TRIGGER IF EXISTS notify_trigger ON messenger_messages;');
        $this->addSql('CREATE TRIGGER notify_trigger AFTER INSERT OR UPDATE ON messenger_messages FOR EACH ROW EXECUTE PROCEDURE notify_messenger_messages();');
        $this->addSql('ALTER TABLE day_trip ADD CONSTRAINT FK_DD3E184DA5BC2E0E FOREIGN KEY (trip_id) REFERENCES trip (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE day_trip_hideout ADD CONSTRAINT FK_F1DBD8845D795E8C FOREIGN KEY (day_trip_id) REFERENCES day_trip (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE day_trip_hideout ADD CONSTRAINT FK_F1DBD884E9982FD7 FOREIGN KEY (hideout_id) REFERENCES hideout (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE picture ADD CONSTRAINT FK_16DB4F895D795E8C FOREIGN KEY (day_trip_id) REFERENCES day_trip (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE day_trip_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE hideout_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE picture_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE trip_id_seq CASCADE');
        $this->addSql('ALTER TABLE day_trip DROP CONSTRAINT FK_DD3E184DA5BC2E0E');
        $this->addSql('ALTER TABLE day_trip_hideout DROP CONSTRAINT FK_F1DBD8845D795E8C');
        $this->addSql('ALTER TABLE day_trip_hideout DROP CONSTRAINT FK_F1DBD884E9982FD7');
        $this->addSql('ALTER TABLE picture DROP CONSTRAINT FK_16DB4F895D795E8C');
        $this->addSql('DROP TABLE day_trip');
        $this->addSql('DROP TABLE day_trip_hideout');
        $this->addSql('DROP TABLE hideout');
        $this->addSql('DROP TABLE picture');
        $this->addSql('DROP TABLE trip');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
