<?php
namespace Shop\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="cash_checkout")
 * @author ezekiel
 *        
 */
class CashCheckout
{

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
    /**
     * @ORM\Column(name="checkout_uid", type="string", nullable=true)
     * @var string
     */
    private $checkoutUid;
    
    /**
     * @ORM\ManyToOne(targetEntity="CartOrders")
     * @var CartOrders
     */
    private $cartOrders;
    
    /**
     * @ORM\Column(name="is_open", type="boolean", nullable=false, options={"default":"1"})
     * @var boolean
     */
    private $isOpen;
    
    /**
     * @ORM\Column(name="created_on", type="datetime", nullable=false)
     * @var \DateTime
     */
    private $createdOn;
    
    /**
     * @ORM\Column(name="updated_on", type="datetime", nullable=false)
     * @var \DateTime
     */
    private $updatedOn;
    
    
    
    /**
     */
    public function __construct()
    {
        
        // TODO - Insert your code here
    }
    /**
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return the $cart
     */
    public function getCart()
    {
        return $this->cart;
    }

    /**
     * @return the $isOpen
     */
    public function getIsOpen()
    {
        return $this->isOpen;
    }

    /**
     * @return the $createdOn
     */
    public function getCreatedOn()
    {
        return $this->createdOn;
    }

    /**
     * @return the $updatedOn
     */
    public function getUpdatedOn()
    {
        return $this->updatedOn;
    }

    /**
     * @param number $id
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param \Shop\Entity\Cart $cart
     */
    public function setCart($cart)
    {
        $this->cart = $cart;
        return $this;
    }

    /**
     * @param boolean $isOpen
     */
    public function setIsOpen($isOpen)
    {
        $this->isOpen = $isOpen;
        return $this;
    }

    /**
     * @param DateTime $createdOn
     */
    public function setCreatedOn($createdOn)
    {
        $this->createdOn = $createdOn;
        $this->updatedOn = $createdOn;
        return $this;
    }

    /**
     * @param DateTime $updatedOn
     */
    public function setUpdatedOn($updatedOn)
    {
        $this->updatedOn = $updatedOn;
        return $this;
    }
    /**
     * @return the $checkoutUid
     */
    public function getCheckoutUid()
    {
        return $this->checkoutUid;
    }

    /**
     * @return the $cartOrders
     */
    public function getCartOrders()
    {
        return $this->cartOrders;
    }

    /**
     * @param string $checkoutUid
     */
    public function setCheckoutUid($checkoutUid)
    {
        $this->checkoutUid = $checkoutUid;
        return $this;
    }

    /**
     * @param \Shop\Entity\CartOrders $cartOrders
     */
    public function setCartOrders($cartOrders)
    {
        $this->cartOrders = $cartOrders;
        return $this;
    }


}

