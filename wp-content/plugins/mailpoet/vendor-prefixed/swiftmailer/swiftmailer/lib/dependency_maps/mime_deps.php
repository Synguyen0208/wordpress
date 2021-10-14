<?php
 namespace MailPoetVendor; if (!defined('ABSPATH')) exit; require __DIR__ . '/../mime_types.php'; Swift_DependencyContainer::getInstance()->register('properties.charset')->asValue('utf-8')->register('email.validator')->asSharedInstanceOf('MailPoetVendor\\Egulias\\EmailValidator\\EmailValidator')->register('mime.idgenerator.idright')->asValue(!empty($_SERVER['SERVER_NAME']) && '' === \preg_replace('/(?:^\\[)?[a-zA-Z0-9-:\\]_]+\\.?/', '', $_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : 'swift.generated')->register('mime.idgenerator')->asSharedInstanceOf('MailPoetVendor\\Swift_Mime_IdGenerator')->withDependencies(['mime.idgenerator.idright'])->register('mime.message')->asNewInstanceOf('MailPoetVendor\\Swift_Mime_SimpleMessage')->withDependencies(['mime.headerset', 'mime.textcontentencoder', 'cache', 'mime.idgenerator', 'properties.charset'])->register('mime.part')->asNewInstanceOf('MailPoetVendor\\Swift_Mime_MimePart')->withDependencies(['mime.headerset', 'mime.textcontentencoder', 'cache', 'mime.idgenerator', 'properties.charset'])->register('mime.attachment')->asNewInstanceOf('MailPoetVendor\\Swift_Mime_Attachment')->withDependencies(['mime.headerset', 'mime.base64contentencoder', 'cache', 'mime.idgenerator'])->addConstructorValue($swift_mime_types)->register('mime.embeddedfile')->asNewInstanceOf('MailPoetVendor\\Swift_Mime_EmbeddedFile')->withDependencies(['mime.headerset', 'mime.base64contentencoder', 'cache', 'mime.idgenerator'])->addConstructorValue($swift_mime_types)->register('mime.headerfactory')->asNewInstanceOf('MailPoetVendor\\Swift_Mime_SimpleHeaderFactory')->withDependencies(['mime.qpheaderencoder', 'mime.rfc2231encoder', 'email.validator', 'properties.charset', 'address.idnaddressencoder'])->register('mime.headerset')->asNewInstanceOf('MailPoetVendor\\Swift_Mime_SimpleHeaderSet')->withDependencies(['mime.headerfactory', 'properties.charset'])->register('mime.qpheaderencoder')->asNewInstanceOf('MailPoetVendor\\Swift_Mime_HeaderEncoder_QpHeaderEncoder')->withDependencies(['mime.charstream'])->register('mime.base64headerencoder')->asNewInstanceOf('MailPoetVendor\\Swift_Mime_HeaderEncoder_Base64HeaderEncoder')->withDependencies(['mime.charstream'])->register('mime.charstream')->asNewInstanceOf('MailPoetVendor\\Swift_CharacterStream_NgCharacterStream')->withDependencies(['mime.characterreaderfactory', 'properties.charset'])->register('mime.bytecanonicalizer')->asSharedInstanceOf('MailPoetVendor\\Swift_StreamFilters_ByteArrayReplacementFilter')->addConstructorValue([[0xd, 0xa], [0xd], [0xa]])->addConstructorValue([[0xa], [0xa], [0xd, 0xa]])->register('mime.characterreaderfactory')->asSharedInstanceOf('MailPoetVendor\\Swift_CharacterReaderFactory_SimpleCharacterReaderFactory')->register('mime.textcontentencoder')->asAliasOf('mime.qpcontentencoder')->register('mime.safeqpcontentencoder')->asNewInstanceOf('MailPoetVendor\\Swift_Mime_ContentEncoder_QpContentEncoder')->withDependencies(['mime.charstream', 'mime.bytecanonicalizer'])->register('mime.rawcontentencoder')->asNewInstanceOf('MailPoetVendor\\Swift_Mime_ContentEncoder_RawContentEncoder')->register('mime.nativeqpcontentencoder')->withDependencies(['properties.charset'])->asNewInstanceOf('MailPoetVendor\\Swift_Mime_ContentEncoder_NativeQpContentEncoder')->register('mime.qpcontentencoder')->asNewInstanceOf('MailPoetVendor\\Swift_Mime_ContentEncoder_QpContentEncoderProxy')->withDependencies(['mime.safeqpcontentencoder', 'mime.nativeqpcontentencoder', 'properties.charset'])->register('mime.7bitcontentencoder')->asNewInstanceOf('MailPoetVendor\\Swift_Mime_ContentEncoder_PlainContentEncoder')->addConstructorValue('7bit')->addConstructorValue(\true)->register('mime.8bitcontentencoder')->asNewInstanceOf('MailPoetVendor\\Swift_Mime_ContentEncoder_PlainContentEncoder')->addConstructorValue('8bit')->addConstructorValue(\true)->register('mime.base64contentencoder')->asSharedInstanceOf('MailPoetVendor\\Swift_Mime_ContentEncoder_Base64ContentEncoder')->register('mime.rfc2231encoder')->asNewInstanceOf('MailPoetVendor\\Swift_Encoder_Rfc2231Encoder')->withDependencies(['mime.charstream']); unset($swift_mime_types); 