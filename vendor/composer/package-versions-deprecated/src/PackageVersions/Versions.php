<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'api-platform/core' => 'v2.5.7@37b5edf50cc05299b12cb8982be3efa035d726ce',
  'composer/package-versions-deprecated' => '1.11.99@c8c9aa8a14cc3d3bec86d0a8c3fa52ea79936855',
  'doctrine/annotations' => '1.10.4@bfe91e31984e2ba76df1c1339681770401ec262f',
  'doctrine/cache' => '1.10.2@13e3381b25847283a91948d04640543941309727',
  'doctrine/collections' => '1.6.7@55f8b799269a1a472457bd1a41b4f379d4cfba4a',
  'doctrine/common' => '3.0.2@a3c6479858989e242a2465972b4f7a8642baf0d4',
  'doctrine/dbal' => '2.11.1@6e6903cd5e3a5be60a79439e3ee8fe126f78fe86',
  'doctrine/doctrine-bundle' => '2.1.2@f5153089993e1230f5d8acbd8e126014d5a63e17',
  'doctrine/doctrine-migrations-bundle' => '3.0.1@96e730b0ffa0bb39c0f913c1966213f1674bf249',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '1.4.3@4650c8b30c753a76bf44fb2ed00117d6f367490c',
  'doctrine/instantiator' => '1.3.1@f350df0268e904597e3bd9c4685c53e0e333feea',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '3.0.1@69eaf2ca5bc48357b43ddbdc31ccdffc0e2a0882',
  'doctrine/orm' => '2.7.4@7d84a4998091ece4d645253ac65de9f879eeed2f',
  'doctrine/persistence' => '2.0.0@1dee036f22cd5dc0bc12132f1d1c38415907be55',
  'doctrine/reflection' => '1.2.1@55e71912dfcd824b2fdd16f2d9afe15684cfce79',
  'doctrine/sql-formatter' => '1.1.1@56070bebac6e77230ed7d306ad13528e60732871',
  'fig/link-util' => '1.1.1@c038ee75ca13663ddc2d1f185fe6f7533c00832a',
  'laminas/laminas-code' => '3.4.1@1cb8f203389ab1482bf89c0e70a04849bacd7766',
  'laminas/laminas-eventmanager' => '3.3.0@1940ccf30e058b2fd66f5a9d696f1b5e0027b082',
  'laminas/laminas-zendframework-bridge' => '1.1.1@6ede70583e101030bcace4dcddd648f760ddf642',
  'nelmio/cors-bundle' => '2.1.0@be4d5824caebc86da9e224e935e02e1201b3ea54',
  'nesbot/carbon' => '2.41.3@e148788eeae9b9b7b87996520358b86faad37b52',
  'ocramius/proxy-manager' => '2.8.0@ac1dd414fd114cfc0da9930e0ab46063c2f5e62a',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.2.2@069a785b2141f5bcf49f3e353548dc1cce6df556',
  'phpdocumentor/type-resolver' => '1.4.0@6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'symfony/asset' => 'v5.1.7@ef0bcafce1c14bbf49838b01e990a8bfafd071eb',
  'symfony/cache' => 'v5.1.7@292cd57b7c2e3c37aa2f0a2fa42dacae567dd5cd',
  'symfony/cache-contracts' => 'v2.2.0@8034ca0b61d4dd967f3698aaa1da2507b631d0cb',
  'symfony/config' => 'v5.1.7@6ad8be6e1280f6734150d8a04a9160dd34ceb191',
  'symfony/console' => 'v5.1.7@ae789a8a2ad189ce7e8216942cdb9b77319f5eb8',
  'symfony/dependency-injection' => 'v5.1.7@2dea4a3ef2eb79138354c1d49e9372cc921af20b',
  'symfony/deprecation-contracts' => 'v2.2.0@5fa56b4074d1ae755beb55617ddafe6f5d78f665',
  'symfony/doctrine-bridge' => 'v5.1.7@b7369a435a64d06e9036e69ed1cd6ce240338583',
  'symfony/dotenv' => 'v5.1.7@f406eaad1231415bf753fbef5aef267a787af4e5',
  'symfony/error-handler' => 'v5.1.7@5e4d8ef8d71822922d1eebd130219ae3491a5ca9',
  'symfony/event-dispatcher' => 'v5.1.7@d5de97d6af175a9e8131c546db054ca32842dd0f',
  'symfony/event-dispatcher-contracts' => 'v2.2.0@0ba7d54483095a198fa51781bc608d17e84dffa2',
  'symfony/expression-language' => 'v5.1.7@e16e66c309214143cc01dae6d1ff1ee13e7be4fa',
  'symfony/filesystem' => 'v5.1.7@1a8697545a8d87b9f2f6b1d32414199cc5e20aae',
  'symfony/finder' => 'v5.1.7@2c3ba7ad6884e6c4451ce2340e2dc23f6fa3e0d8',
  'symfony/flex' => 'v1.9.8@1cc70238036f54760ce9180484c973b1a3c87b05',
  'symfony/framework-bundle' => 'v5.1.7@023ca658526278c0e74542079f1984e042aa6c1d',
  'symfony/http-client-contracts' => 'v2.2.0@3a5d0fe7908daaa23e3dbf4cee3ba4bfbb19fdd3',
  'symfony/http-foundation' => 'v5.1.7@353b42e7b4fd1c898aab09a059466c9cea74039b',
  'symfony/http-kernel' => 'v5.1.7@1764b87d2f10d5c9ce6e4850fe27934116d89708',
  'symfony/polyfill-intl-grapheme' => 'v1.18.1@b740103edbdcc39602239ee8860f0f45a8eb9aa5',
  'symfony/polyfill-intl-normalizer' => 'v1.18.1@37078a8dd4a2a1e9ab0231af7c6cb671b2ed5a7e',
  'symfony/polyfill-mbstring' => 'v1.18.1@a6977d63bf9a0ad4c65cd352709e230876f9904a',
  'symfony/polyfill-php73' => 'v1.18.1@fffa1a52a023e782cdcc221d781fe1ec8f87fcca',
  'symfony/polyfill-php80' => 'v1.18.1@d87d5766cbf48d72388a9f6b85f280c8ad51f981',
  'symfony/property-access' => 'v5.1.7@4c43f7ff784e1e3ee1c96e15f76b342af6617b39',
  'symfony/property-info' => 'v5.1.7@22518930091e0bdb249694efc509e3697f7e325e',
  'symfony/routing' => 'v5.1.7@720348c2ae011f8c56964c0fc3e992840cb60ccf',
  'symfony/security-bundle' => 'v5.1.7@c9cbe7d78d734062365e2af6d8d475d8888a7bcc',
  'symfony/security-core' => 'v5.1.7@6c5d337d9549c1ab4c2edcee50bbb0bc509ebb17',
  'symfony/security-csrf' => 'v5.1.7@f1659a16028a50766dbffa73160fb94599131014',
  'symfony/security-guard' => 'v5.1.7@85c368be963e9f0df9e93d830f966fc0af531703',
  'symfony/security-http' => 'v5.1.7@22d653f2b407794f6a81cc1a76aa617e65ad6d86',
  'symfony/serializer' => 'v5.1.7@6b673b802dabd2bcf7cab05d04d2d8ef8891b952',
  'symfony/service-contracts' => 'v2.2.0@d15da7ba4957ffb8f1747218be9e1a121fd298a1',
  'symfony/stopwatch' => 'v5.1.7@0f7c58cf81dbb5dd67d423a89d577524a2ec0323',
  'symfony/string' => 'v5.1.7@4a9afe9d07bac506f75bcee8ed3ce76da5a9343e',
  'symfony/translation' => 'v5.1.7@e3cdd5119b1b5bf0698c351b8ee20fb5a4ea248b',
  'symfony/translation-contracts' => 'v2.3.0@e2eaa60b558f26a4b0354e1bbb25636efaaad105',
  'symfony/twig-bridge' => 'v5.1.7@ad3c3e89353749dcead9ee25388177ebbb4569a1',
  'symfony/twig-bundle' => 'v5.1.7@8898ef8aea8fa48638e15ce00c7c6318ce570ce1',
  'symfony/validator' => 'v5.1.7@30f946a6d12518b806a785a4ba83c820f6f807ec',
  'symfony/var-dumper' => 'v5.1.7@c976c115a0d788808f7e71834c8eb0844f678d02',
  'symfony/var-exporter' => 'v5.1.7@8b858508e49beb257fd635104c3d449a8113e8fe',
  'symfony/web-link' => 'v5.1.7@ba2554887e34e693e3888f23f83c72d5ce04bfb2',
  'symfony/yaml' => 'v5.1.7@e147a68cb66a8b510f4b7481fe4da5b2ab65ec6a',
  'twig/twig' => 'v3.0.5@9b76b1535483cdf4edf01bb787b0217b62bd68a5',
  'webimpress/safe-writer' => '2.1.0@5cfafdec5873c389036f14bf832a5efc9390dcdd',
  'webmozart/assert' => '1.9.1@bafc69caeb4d49c39fd0779086c03a3738cbb389',
  'willdurand/negotiation' => 'v2.3.1@03436ededa67c6e83b9b12defac15384cb399dc9',
  'nikic/php-parser' => 'v4.10.2@658f1be311a230e0907f5dfe0213742aff0596de',
  'symfony/maker-bundle' => 'v1.21.1@da629093c7bf9abd9a6a0f232a43bbb1b88de68d',
  'symfony/web-profiler-bundle' => 'v5.1.7@4b02edb4c4c2d57b94e62904e45f3484b29d36eb',
  'paragonie/random_compat' => '2.*@6fd4266b677b2e6c954fe186d3adcde9d3768f65',
  'symfony/polyfill-ctype' => '*@6fd4266b677b2e6c954fe186d3adcde9d3768f65',
  'symfony/polyfill-iconv' => '*@6fd4266b677b2e6c954fe186d3adcde9d3768f65',
  'symfony/polyfill-php72' => '*@6fd4266b677b2e6c954fe186d3adcde9d3768f65',
  'symfony/polyfill-php71' => '*@6fd4266b677b2e6c954fe186d3adcde9d3768f65',
  'symfony/polyfill-php70' => '*@6fd4266b677b2e6c954fe186d3adcde9d3768f65',
  'symfony/polyfill-php56' => '*@6fd4266b677b2e6c954fe186d3adcde9d3768f65',
  '__root__' => 'dev-master@6fd4266b677b2e6c954fe186d3adcde9d3768f65',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !InstalledVersions::getRawData()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && InstalledVersions::getRawData()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
