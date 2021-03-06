<?php
namespace Bbmin\View\Helper;

use Laminas\Form\View\Helper\AbstractHelper;
use Laminas\ServiceManager\ServiceLocatorAwareInterface;

/**
 *
 * @author otaba
 *        
 */
class BbminLayoutTopBarNotification extends AbstractHelper implements  ServiceLocatorAwareInterface
{
    private $auth;
    
    private $serviceLocator;
    
    

    
    
    /**
     */
    public function __construct()
    {
        
        $frame = "<li class='dropdown'><a href='javascript:;' data-toggle='dropdown'
					class='dropdown-toggle f-s-14'> <i class='fa fa-bell'></i> <span
						class='label'>5</span>
				</a>
					<ul class='dropdown-menu media-list dropdown-menu-right'>
						<li class='dropdown-header'>NOTIFICATIONS (5)</li>
						<li class='media'><a href='javascript:;'>
								<div class='media-left'>
									<i class='fa fa-bug media-object bg-silver-darker'></i>
								</div>
								<div class='media-body'>
									<h6 class='media-heading'>
										Server Error Reports <i
											class='fa fa-exclamation-circle text-danger'></i>
									</h6>
									<div class='text-muted f-s-11'>3 minutes ago</div>
								</div>
						</a></li>
						<li class='media'><a href='javascript:;'>
								<div class='media-left'>
									<img src='../assets/img/user/user-1.jpg' class='media-object'
										alt='' /> <i
										class='fab fa-facebook-messenger text-primary media-object-icon'></i>
								</div>
								<div class='media-body'>
									<h6 class='media-heading'>John Smith</h6>
									<p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
									<div class='text-muted f-s-11'>25 minutes ago</div>
								</div>
						</a></li>
						<li class='media'><a href='javascript:;'>
								<div class='media-left'>
									<img src='../assets/img/user/user-2.jpg' class='media-object'
										alt='' /> <i
										class='fab fa-facebook-messenger text-primary media-object-icon'></i>
								</div>
								<div class='media-body'>
									<h6 class='media-heading'>Olivia</h6>
									<p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
									<div class='text-muted f-s-11'>35 minutes ago</div>
								</div>
						</a></li>
						<li class='media'><a href='javascript:;'>
								<div class='media-left'>
									<i class='fa fa-plus media-object bg-silver-darker'></i>
								</div>
								<div class='media-body'>
									<h6 class='media-heading'>New User Registered</h6>
									<div class='text-muted f-s-11'>1 hour ago</div>
								</div>
						</a></li>
						<li class='media'><a href='javascript:;'>
								<div class='media-left'>
									<i class='fa fa-envelope media-object bg-silver-darker'></i> <i
										class='fab fa-google text-warning media-object-icon f-s-14'></i>
								</div>
								<div class='media-body'>
									<h6 class='media-heading'>New Email From John</h6>
									<div class='text-muted f-s-11'>2 hour ago</div>
								</div>
						</a></li>
						<li class='dropdown-footer text-center'><a href='javascript:;'>View
								more</a></li>
					</ul></li>";
    }
    /**
     * {@inheritDoc}
     * @see \Laminas\ServiceManager\ServiceLocatorAwareInterface::setServiceLocator()
     */
    public function setServiceLocator(\Laminas\ServiceManager\ServiceLocatorInterface $serviceLocator)
    {
       $this->serviceLocator = $serviceLocator;
       return $this;
    }

    /**
     * {@inheritDoc}
     * @see \Laminas\ServiceManager\ServiceLocatorAwareInterface::getServiceLocator()
     */
    public function getServiceLocator()
    {
        return $this->serviceLocator;
    }

}

