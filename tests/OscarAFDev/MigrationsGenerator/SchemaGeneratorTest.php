<?php namespace OscarAFDev\MigrationsGenerator;

use OscarAFDev\MigrationsGenerator\Generators\SchemaGenerator;
use PHPUnit\Framework\TestCase;

class SchemaGeneratorTest extends TestCase {

  public function testPrefersCreateSchemaManagerWhenAvailable()
  {
    $schema = new \stdClass();
    $generator = new TestableSchemaGenerator();

    $this->assertSame(
      $schema,
      $generator->publicGetSchemaManager(new ConnectionWithCreateSchemaManager($schema))
    );
  }

  public function testFallsBackToGetSchemaManagerForOlderDbalConnections()
  {
    $schema = new \stdClass();
    $generator = new TestableSchemaGenerator();

    $this->assertSame(
      $schema,
      $generator->publicGetSchemaManager(new ConnectionWithGetSchemaManager($schema))
    );
  }
}

class TestableSchemaGenerator extends SchemaGenerator {

  public function __construct()
  {
  }

  public function publicGetSchemaManager($connection)
  {
    return $this->getSchemaManager($connection);
  }
}

class ConnectionWithCreateSchemaManager {

  private $schema;

  public function __construct($schema)
  {
    $this->schema = $schema;
  }

  public function createSchemaManager()
  {
    return $this->schema;
  }
}

class ConnectionWithGetSchemaManager {

  private $schema;

  public function __construct($schema)
  {
    $this->schema = $schema;
  }

  public function getSchemaManager()
  {
    return $this->schema;
  }
}
