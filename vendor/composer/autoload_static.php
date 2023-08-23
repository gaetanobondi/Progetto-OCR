<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc9d6a888f19721156b93a81e7fc8baba
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'thiagoalessio\\TesseractOCR\\' => 27,
        ),
        'P' => 
        array (
            'PhpParser\\' => 10,
        ),
        'K' => 
        array (
            'Khaledalam\\BardSdkPhp\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'thiagoalessio\\TesseractOCR\\' => 
        array (
            0 => __DIR__ . '/..' . '/thiagoalessio/tesseract_ocr/src',
        ),
        'PhpParser\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/php-parser/lib/PhpParser',
        ),
        'Khaledalam\\BardSdkPhp\\' => 
        array (
            0 => __DIR__ . '/..' . '/khaledalam/bard-sdk-php/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'SebastianBergmann\\CodeCoverage\\BranchAndPathCoverageNotSupportedException' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Exception/BranchAndPathCoverageNotSupportedException.php',
        'SebastianBergmann\\CodeCoverage\\CodeCoverage' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/CodeCoverage.php',
        'SebastianBergmann\\CodeCoverage\\DeadCodeDetectionNotSupportedException' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Exception/DeadCodeDetectionNotSupportedException.php',
        'SebastianBergmann\\CodeCoverage\\Driver\\Driver' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Driver/Driver.php',
        'SebastianBergmann\\CodeCoverage\\Driver\\PathExistsButIsNotDirectoryException' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Exception/PathExistsButIsNotDirectoryException.php',
        'SebastianBergmann\\CodeCoverage\\Driver\\PcovDriver' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Driver/PcovDriver.php',
        'SebastianBergmann\\CodeCoverage\\Driver\\PcovNotAvailableException' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Exception/PcovNotAvailableException.php',
        'SebastianBergmann\\CodeCoverage\\Driver\\PhpdbgDriver' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Driver/PhpdbgDriver.php',
        'SebastianBergmann\\CodeCoverage\\Driver\\PhpdbgNotAvailableException' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Exception/PhpdbgNotAvailableException.php',
        'SebastianBergmann\\CodeCoverage\\Driver\\Selector' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Driver/Selector.php',
        'SebastianBergmann\\CodeCoverage\\Driver\\WriteOperationFailedException' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Exception/WriteOperationFailedException.php',
        'SebastianBergmann\\CodeCoverage\\Driver\\WrongXdebugVersionException' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Exception/WrongXdebugVersionException.php',
        'SebastianBergmann\\CodeCoverage\\Driver\\Xdebug2Driver' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Driver/Xdebug2Driver.php',
        'SebastianBergmann\\CodeCoverage\\Driver\\Xdebug2NotEnabledException' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Exception/Xdebug2NotEnabledException.php',
        'SebastianBergmann\\CodeCoverage\\Driver\\Xdebug3Driver' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Driver/Xdebug3Driver.php',
        'SebastianBergmann\\CodeCoverage\\Driver\\Xdebug3NotEnabledException' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Exception/Xdebug3NotEnabledException.php',
        'SebastianBergmann\\CodeCoverage\\Driver\\XdebugNotAvailableException' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Exception/XdebugNotAvailableException.php',
        'SebastianBergmann\\CodeCoverage\\Exception' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Exception/Exception.php',
        'SebastianBergmann\\CodeCoverage\\Filter' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Filter.php',
        'SebastianBergmann\\CodeCoverage\\InvalidArgumentException' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Exception/InvalidArgumentException.php',
        'SebastianBergmann\\CodeCoverage\\NoCodeCoverageDriverAvailableException' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Exception/NoCodeCoverageDriverAvailableException.php',
        'SebastianBergmann\\CodeCoverage\\NoCodeCoverageDriverWithPathCoverageSupportAvailableException' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Exception/NoCodeCoverageDriverWithPathCoverageSupportAvailableException.php',
        'SebastianBergmann\\CodeCoverage\\Node\\AbstractNode' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Node/AbstractNode.php',
        'SebastianBergmann\\CodeCoverage\\Node\\Builder' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Node/Builder.php',
        'SebastianBergmann\\CodeCoverage\\Node\\CrapIndex' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Node/CrapIndex.php',
        'SebastianBergmann\\CodeCoverage\\Node\\Directory' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Node/Directory.php',
        'SebastianBergmann\\CodeCoverage\\Node\\File' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Node/File.php',
        'SebastianBergmann\\CodeCoverage\\Node\\Iterator' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Node/Iterator.php',
        'SebastianBergmann\\CodeCoverage\\ParserException' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Exception/ParserException.php',
        'SebastianBergmann\\CodeCoverage\\ProcessedCodeCoverageData' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/ProcessedCodeCoverageData.php',
        'SebastianBergmann\\CodeCoverage\\RawCodeCoverageData' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/RawCodeCoverageData.php',
        'SebastianBergmann\\CodeCoverage\\ReflectionException' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Exception/ReflectionException.php',
        'SebastianBergmann\\CodeCoverage\\ReportAlreadyFinalizedException' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Exception/ReportAlreadyFinalizedException.php',
        'SebastianBergmann\\CodeCoverage\\Report\\Clover' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Report/Clover.php',
        'SebastianBergmann\\CodeCoverage\\Report\\Cobertura' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Report/Cobertura.php',
        'SebastianBergmann\\CodeCoverage\\Report\\Crap4j' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Report/Crap4j.php',
        'SebastianBergmann\\CodeCoverage\\Report\\Html\\Dashboard' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Report/Html/Renderer/Dashboard.php',
        'SebastianBergmann\\CodeCoverage\\Report\\Html\\Directory' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Report/Html/Renderer/Directory.php',
        'SebastianBergmann\\CodeCoverage\\Report\\Html\\Facade' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Report/Html/Facade.php',
        'SebastianBergmann\\CodeCoverage\\Report\\Html\\File' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Report/Html/Renderer/File.php',
        'SebastianBergmann\\CodeCoverage\\Report\\Html\\Renderer' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Report/Html/Renderer.php',
        'SebastianBergmann\\CodeCoverage\\Report\\PHP' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Report/PHP.php',
        'SebastianBergmann\\CodeCoverage\\Report\\Text' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Report/Text.php',
        'SebastianBergmann\\CodeCoverage\\Report\\Xml\\BuildInformation' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Report/Xml/BuildInformation.php',
        'SebastianBergmann\\CodeCoverage\\Report\\Xml\\Coverage' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Report/Xml/Coverage.php',
        'SebastianBergmann\\CodeCoverage\\Report\\Xml\\Directory' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Report/Xml/Directory.php',
        'SebastianBergmann\\CodeCoverage\\Report\\Xml\\Facade' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Report/Xml/Facade.php',
        'SebastianBergmann\\CodeCoverage\\Report\\Xml\\File' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Report/Xml/File.php',
        'SebastianBergmann\\CodeCoverage\\Report\\Xml\\Method' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Report/Xml/Method.php',
        'SebastianBergmann\\CodeCoverage\\Report\\Xml\\Node' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Report/Xml/Node.php',
        'SebastianBergmann\\CodeCoverage\\Report\\Xml\\Project' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Report/Xml/Project.php',
        'SebastianBergmann\\CodeCoverage\\Report\\Xml\\Report' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Report/Xml/Report.php',
        'SebastianBergmann\\CodeCoverage\\Report\\Xml\\Source' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Report/Xml/Source.php',
        'SebastianBergmann\\CodeCoverage\\Report\\Xml\\Tests' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Report/Xml/Tests.php',
        'SebastianBergmann\\CodeCoverage\\Report\\Xml\\Totals' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Report/Xml/Totals.php',
        'SebastianBergmann\\CodeCoverage\\Report\\Xml\\Unit' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Report/Xml/Unit.php',
        'SebastianBergmann\\CodeCoverage\\StaticAnalysisCacheNotConfiguredException' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Exception/StaticAnalysisCacheNotConfiguredException.php',
        'SebastianBergmann\\CodeCoverage\\StaticAnalysis\\CacheWarmer' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/StaticAnalysis/CacheWarmer.php',
        'SebastianBergmann\\CodeCoverage\\StaticAnalysis\\CachingFileAnalyser' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/StaticAnalysis/CachingFileAnalyser.php',
        'SebastianBergmann\\CodeCoverage\\StaticAnalysis\\CodeUnitFindingVisitor' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/StaticAnalysis/CodeUnitFindingVisitor.php',
        'SebastianBergmann\\CodeCoverage\\StaticAnalysis\\ExecutableLinesFindingVisitor' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/StaticAnalysis/ExecutableLinesFindingVisitor.php',
        'SebastianBergmann\\CodeCoverage\\StaticAnalysis\\FileAnalyser' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/StaticAnalysis/FileAnalyser.php',
        'SebastianBergmann\\CodeCoverage\\StaticAnalysis\\IgnoredLinesFindingVisitor' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/StaticAnalysis/IgnoredLinesFindingVisitor.php',
        'SebastianBergmann\\CodeCoverage\\StaticAnalysis\\ParsingFileAnalyser' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/StaticAnalysis/ParsingFileAnalyser.php',
        'SebastianBergmann\\CodeCoverage\\TestIdMissingException' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Exception/TestIdMissingException.php',
        'SebastianBergmann\\CodeCoverage\\UnintentionallyCoveredCodeException' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Exception/UnintentionallyCoveredCodeException.php',
        'SebastianBergmann\\CodeCoverage\\Util\\DirectoryCouldNotBeCreatedException' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Exception/DirectoryCouldNotBeCreatedException.php',
        'SebastianBergmann\\CodeCoverage\\Util\\Filesystem' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Util/Filesystem.php',
        'SebastianBergmann\\CodeCoverage\\Util\\Percentage' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Util/Percentage.php',
        'SebastianBergmann\\CodeCoverage\\Version' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Version.php',
        'SebastianBergmann\\CodeCoverage\\XmlException' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Exception/XmlException.php',
        'SebastianBergmann\\CodeUnitReverseLookup\\Wizard' => __DIR__ . '/..' . '/sebastian/code-unit-reverse-lookup/src/Wizard.php',
        'SebastianBergmann\\Complexity\\Calculator' => __DIR__ . '/..' . '/sebastian/complexity/src/Calculator.php',
        'SebastianBergmann\\Complexity\\Complexity' => __DIR__ . '/..' . '/sebastian/complexity/src/Complexity/Complexity.php',
        'SebastianBergmann\\Complexity\\ComplexityCalculatingVisitor' => __DIR__ . '/..' . '/sebastian/complexity/src/Visitor/ComplexityCalculatingVisitor.php',
        'SebastianBergmann\\Complexity\\ComplexityCollection' => __DIR__ . '/..' . '/sebastian/complexity/src/Complexity/ComplexityCollection.php',
        'SebastianBergmann\\Complexity\\ComplexityCollectionIterator' => __DIR__ . '/..' . '/sebastian/complexity/src/Complexity/ComplexityCollectionIterator.php',
        'SebastianBergmann\\Complexity\\CyclomaticComplexityCalculatingVisitor' => __DIR__ . '/..' . '/sebastian/complexity/src/Visitor/CyclomaticComplexityCalculatingVisitor.php',
        'SebastianBergmann\\Complexity\\Exception' => __DIR__ . '/..' . '/sebastian/complexity/src/Exception/Exception.php',
        'SebastianBergmann\\Complexity\\RuntimeException' => __DIR__ . '/..' . '/sebastian/complexity/src/Exception/RuntimeException.php',
        'SebastianBergmann\\Environment\\Console' => __DIR__ . '/..' . '/sebastian/environment/src/Console.php',
        'SebastianBergmann\\Environment\\OperatingSystem' => __DIR__ . '/..' . '/sebastian/environment/src/OperatingSystem.php',
        'SebastianBergmann\\Environment\\Runtime' => __DIR__ . '/..' . '/sebastian/environment/src/Runtime.php',
        'SebastianBergmann\\FileIterator\\Facade' => __DIR__ . '/..' . '/phpunit/php-file-iterator/src/Facade.php',
        'SebastianBergmann\\FileIterator\\Factory' => __DIR__ . '/..' . '/phpunit/php-file-iterator/src/Factory.php',
        'SebastianBergmann\\FileIterator\\Iterator' => __DIR__ . '/..' . '/phpunit/php-file-iterator/src/Iterator.php',
        'SebastianBergmann\\LinesOfCode\\Counter' => __DIR__ . '/..' . '/sebastian/lines-of-code/src/Counter.php',
        'SebastianBergmann\\LinesOfCode\\Exception' => __DIR__ . '/..' . '/sebastian/lines-of-code/src/Exception/Exception.php',
        'SebastianBergmann\\LinesOfCode\\IllogicalValuesException' => __DIR__ . '/..' . '/sebastian/lines-of-code/src/Exception/IllogicalValuesException.php',
        'SebastianBergmann\\LinesOfCode\\LineCountingVisitor' => __DIR__ . '/..' . '/sebastian/lines-of-code/src/LineCountingVisitor.php',
        'SebastianBergmann\\LinesOfCode\\LinesOfCode' => __DIR__ . '/..' . '/sebastian/lines-of-code/src/LinesOfCode.php',
        'SebastianBergmann\\LinesOfCode\\NegativeValueException' => __DIR__ . '/..' . '/sebastian/lines-of-code/src/Exception/NegativeValueException.php',
        'SebastianBergmann\\LinesOfCode\\RuntimeException' => __DIR__ . '/..' . '/sebastian/lines-of-code/src/Exception/RuntimeException.php',
        'SebastianBergmann\\Template\\Exception' => __DIR__ . '/..' . '/phpunit/php-text-template/src/exceptions/Exception.php',
        'SebastianBergmann\\Template\\InvalidArgumentException' => __DIR__ . '/..' . '/phpunit/php-text-template/src/exceptions/InvalidArgumentException.php',
        'SebastianBergmann\\Template\\RuntimeException' => __DIR__ . '/..' . '/phpunit/php-text-template/src/exceptions/RuntimeException.php',
        'SebastianBergmann\\Template\\Template' => __DIR__ . '/..' . '/phpunit/php-text-template/src/Template.php',
        'SebastianBergmann\\Version' => __DIR__ . '/..' . '/sebastian/version/src/Version.php',
        'TheSeer\\Tokenizer\\Exception' => __DIR__ . '/..' . '/theseer/tokenizer/src/Exception.php',
        'TheSeer\\Tokenizer\\NamespaceUri' => __DIR__ . '/..' . '/theseer/tokenizer/src/NamespaceUri.php',
        'TheSeer\\Tokenizer\\NamespaceUriException' => __DIR__ . '/..' . '/theseer/tokenizer/src/NamespaceUriException.php',
        'TheSeer\\Tokenizer\\Token' => __DIR__ . '/..' . '/theseer/tokenizer/src/Token.php',
        'TheSeer\\Tokenizer\\TokenCollection' => __DIR__ . '/..' . '/theseer/tokenizer/src/TokenCollection.php',
        'TheSeer\\Tokenizer\\TokenCollectionException' => __DIR__ . '/..' . '/theseer/tokenizer/src/TokenCollectionException.php',
        'TheSeer\\Tokenizer\\Tokenizer' => __DIR__ . '/..' . '/theseer/tokenizer/src/Tokenizer.php',
        'TheSeer\\Tokenizer\\XMLSerializer' => __DIR__ . '/..' . '/theseer/tokenizer/src/XMLSerializer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc9d6a888f19721156b93a81e7fc8baba::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc9d6a888f19721156b93a81e7fc8baba::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc9d6a888f19721156b93a81e7fc8baba::$classMap;

        }, null, ClassLoader::class);
    }
}