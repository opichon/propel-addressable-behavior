propel-addressable-behavior
========================

The Addressable behavior adds address-related fields to a table.

Requirements
------------

This behavior requires Propel >= 1.6.0.

Installation
------------

Get the code by adding the following line to your `composer.json` file:

```yaml
	require: {
		"opichon/propel-addressable-behavior": "dev-master"
	}
```

Then run:

```
php composer.phar install
```

or

```
php composer.phar update
```

Configuration
-------------
Add the following to your `propel.ini` or `build.properties` file.

```
propel.behavior.addressable.class: AddressableBehavior
```

Usage
=====

#### In the Propel schema

Add the behavior to the relevant table's schema definition:

```xml

<?xml version="1.0" encoding="utf-8"?>
<database name="default" namespace="My\App\lib" defaultIdMethod="native">
    <table name="document" phpName="Document" idMethod="native">
        <!-- you column definitions -->
        <behavior name="addressable" />
    </table>
</database>

```
