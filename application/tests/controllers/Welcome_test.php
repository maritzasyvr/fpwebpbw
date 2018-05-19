<?php
/**
 * Part of ci-phpunit-test
 *
 * @author     Kenji Suzuki <https://github.com/kenjis>
 * @license    MIT License
 * @copyright  2015 Kenji Suzuki
 * @link       https://github.com/kenjis/ci-phpunit-test
 */

class Welcome_test extends TestCase
{
	public function test_index()
	{
		$output = $this->request('GET', 'welcome/index');
		$this->assertContains("<title>Mamma's Kitchen</title>", $output);
	}

    public function test_login()
    {
        $output = $this->request(                                                               
		'POST',                                         
		'login/aksi_login',                         
			[                                           
				'username' => 'maritza',       
				'password' => 'tetew'                     
			]                                              
	);                                                            
		$this->assertEquals('login', $_SESSION['status']);
        $this->assertRedirect('admin');
    }

    public function test_login_gaada_isinya()
    {
        $output = $this->request(                                                               
		'POST',                                         
		'login/aksi_login',                         
			[                                           
				'username' => '',       
				'password' => ''                     
			]                                              
	);                                                            
		$this->assertEquals('', $_SESSION['status']);
        $this->assertContains('Username dan password salah !', $output);
    }

    public function test_login_username_salah()
    {
        $output = $this->request(                                                               
		'POST',                                         
		'login/aksi_login',                         
			[                                           
				'username' => 'hipzulaje',       
				'password' => 'tetew'                     
			]                                              
	);                                                            
		$this->assertEquals('', $_SESSION['status']);
        $this->assertContains('Username dan password salah !', $output);
    }

    public function test_login_password_salah()
    {
        $output = $this->request(                                                               
		'POST',                                         
		'login/aksi_login',                         
			[                                           
				'username' => 'maritza',       
				'password' => 'ehehe'                     
			]                                              
	);                                                            
		$this->assertEquals('', $_SESSION['status']);
        $this->assertContains('Username dan password salah !', $output);
    }

    public function test_login_22nya_salah()
    {
        $output = $this->request(                                                               
		'POST',                                         
		'login/aksi_login',                         
			[                                           
				'username' => 'mar',       
				'password' => 'ehehe'                     
			]                                              
	);                                                            
		$this->assertEquals('', $_SESSION['status']);
        $this->assertContains('Username dan password salah !', $output);
    }
}
