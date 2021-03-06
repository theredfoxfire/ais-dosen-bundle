<?php

namespace Ais\DosenBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Ais\DosenBundle\Model\DosenInterface;

/**
 * Dosen
 *
 * @ORM\Table()
 * @ORM\Entity()
 */
class Dosen implements DosenInterface
{
    /**
     * @var string
     */
    private $kode;

    /**
     * @var string
     */
    private $nama;

    /**
     * @var string
     */
    private $nama_singkat;

    /**
     * @var string
     */
    private $user_id;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var string
     */
    private $foto;

    /**
     * @var boolean
     */
    private $is_active;

    /**
     * @var boolean
     */
    private $is_delete;


    /**
     * Set kode
     *
     * @param string $kode
     *
     * @return Dosen
     */
    public function setKode($kode)
    {
        $this->kode = $kode;

        return $this;
    }

    /**
     * Get kode
     *
     * @return string
     */
    public function getKode()
    {
        return $this->kode;
    }

    /**
     * Set nama
     *
     * @param string $nama
     *
     * @return Dosen
     */
    public function setNama($nama)
    {
        $this->nama = $nama;

        return $this;
    }

    /**
     * Get nama
     *
     * @return string
     */
    public function getNama()
    {
        return $this->nama;
    }

    /**
     * Set namaSingkat
     *
     * @param string $namaSingkat
     *
     * @return Dosen
     */
    public function setNamaSingkat($namaSingkat)
    {
        $this->nama_singkat = $namaSingkat;

        return $this;
    }

    /**
     * Get namaSingkat
     *
     * @return string
     */
    public function getNamaSingkat()
    {
        return $this->nama_singkat;
    }

    /**
     * Set userId
     *
     * @param string $userId
     *
     * @return Dosen
     */
    public function setUserId($userId)
    {
        $this->user_id = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Dosen
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Dosen
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set foto
     *
     * @param string $foto
     *
     * @return Dosen
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return Dosen
     */
    public function setIsActive($isActive)
    {
        $this->is_active = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->is_active;
    }

    /**
     * Set isDelete
     *
     * @param boolean $isDelete
     *
     * @return Dosen
     */
    public function setIsDelete($isDelete)
    {
        $this->is_delete = $isDelete;

        return $this;
    }

    /**
     * Get isDelete
     *
     * @return boolean
     */
    public function getIsDelete()
    {
        return $this->is_delete;
    }
    
    /**
     * @var integer
     */
    private $id;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
