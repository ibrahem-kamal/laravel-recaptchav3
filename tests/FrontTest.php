<?php

namespace Lunaweb\RecaptchaV3\Tests;

use Lunaweb\RecaptchaV3\Facades\RecaptchaV3;

class FrontTest extends TestCase
{
  /** @test */
    public function it_returns_empty_string_if_for_js_init_if_config_is_disabled()
    {
        config(['recaptchav3.is_enabled' => false]);
        $this->assertEquals('', RecaptchaV3::initJs());
    }
}