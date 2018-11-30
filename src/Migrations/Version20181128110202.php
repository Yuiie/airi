<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181128110202 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE images_user');
        $this->addSql('ALTER TABLE images ADD pseudo_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE images ADD CONSTRAINT FK_E01FBE6A20E394C2 FOREIGN KEY (pseudo_id) REFERENCES fos_user (id)');
        $this->addSql('CREATE INDEX IDX_E01FBE6A20E394C2 ON images (pseudo_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE images_user (images_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_B79DE7B6D44F05E5 (images_id), INDEX IDX_B79DE7B6A76ED395 (user_id), PRIMARY KEY(images_id, user_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE images_user ADD CONSTRAINT FK_B79DE7B6A76ED395 FOREIGN KEY (user_id) REFERENCES fos_user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE images_user ADD CONSTRAINT FK_B79DE7B6D44F05E5 FOREIGN KEY (images_id) REFERENCES images (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE images DROP FOREIGN KEY FK_E01FBE6A20E394C2');
        $this->addSql('DROP INDEX IDX_E01FBE6A20E394C2 ON images');
        $this->addSql('ALTER TABLE images DROP pseudo_id');
    }
}
