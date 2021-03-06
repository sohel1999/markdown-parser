<?php
namespace Sohel\MarkdownParser\Test\Feature;
use Sohel\MarkdownParser\MarkdownParser;
use Sohel\MarkdownParser\Test\TestCase;

class  MarkdownTest extends TestCase
{

    public function test_simple_markdown_is_test()
    {
       $this->assertEquals('<h1>Hello Bangladesh</h1>',MarkdownParser::parse('# Hello Bangladesh'));
    }

    public function test_italic_markdown_is_test()
    {
        $this->assertEquals('<p><em>Hello</em></p>',MarkdownParser::parse('*Hello*'));
    }



}
