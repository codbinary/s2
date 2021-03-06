<?php

namespace BackendBundle\Entity;

/**
 * FormPucp
 */
class FormPucp
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $txtrazonsocial;

    /**
     * @var string
     */
    private $txtruc;

    /**
     * @var string
     */
    private $txtdireccion;

    /**
     * @var string
     */
    private $txtresponsable;

    /**
     * @var string
     */
    private $txtmailresponsable;

    /**
     * @var string
     */
    private $txttelresponsable;

    /**
     * @var string
     */
    private $txttipevento;

    /**
     * @var string
     */
    private $txtnameevento;

    /**
     * @var string
     */
    private $txtdateinicevento;

    /**
     * @var string
     */
    private $txtdatefinevento;

    /**
     * @var string
     */
    private $txtdateinchoraevnt;

    /**
     * @var string
     */
    private $txtfindatehoraevent;

    /**
     * @var string
     */
    private $txttemas;

    /**
     * @var string
     */
    private $txtnombreexpositores;

    /**
     * @var string
     */
    private $cboingresoevento;

    /**
     * @var string
     */
    private $cbosalatipoauditorio;

    /**
     * @var string
     */
    private $cbodirectorio;

    /**
     * @var string
     */
    private $cbosalondeclases;

    /**
     * @var string
     */
    private $cbosalamesasu;

    /**
     * @var string
     */
    private $rdoproyector;

    /**
     * @var string
     */
    private $rdopizarra;

    /**
     * @var string
     */
    private $rdodvd;

    /**
     * @var string
     */
    private $rdomicrofonos;

    /**
     * @var string
     */
    private $rdomesaregistroparticipantes;

    /**
     * @var string
     */
    private $txtcomentario;

    /**
     * @var \DateTime
     */
    private $fecha;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set txtrazonsocial
     *
     * @param string $txtrazonsocial
     *
     * @return FormPucp
     */
    public function setTxtrazonsocial($txtrazonsocial)
    {
        $this->txtrazonsocial = $txtrazonsocial;

        return $this;
    }

    /**
     * Get txtrazonsocial
     *
     * @return string
     */
    public function getTxtrazonsocial()
    {
        return $this->txtrazonsocial;
    }

    /**
     * Set txtruc
     *
     * @param string $txtruc
     *
     * @return FormPucp
     */
    public function setTxtruc($txtruc)
    {
        $this->txtruc = $txtruc;

        return $this;
    }

    /**
     * Get txtruc
     *
     * @return string
     */
    public function getTxtruc()
    {
        return $this->txtruc;
    }

    /**
     * Set txtdireccion
     *
     * @param string $txtdireccion
     *
     * @return FormPucp
     */
    public function setTxtdireccion($txtdireccion)
    {
        $this->txtdireccion = $txtdireccion;

        return $this;
    }

    /**
     * Get txtdireccion
     *
     * @return string
     */
    public function getTxtdireccion()
    {
        return $this->txtdireccion;
    }

    /**
     * Set txtresponsable
     *
     * @param string $txtresponsable
     *
     * @return FormPucp
     */
    public function setTxtresponsable($txtresponsable)
    {
        $this->txtresponsable = $txtresponsable;

        return $this;
    }

    /**
     * Get txtresponsable
     *
     * @return string
     */
    public function getTxtresponsable()
    {
        return $this->txtresponsable;
    }

    /**
     * Set txtmailresponsable
     *
     * @param string $txtmailresponsable
     *
     * @return FormPucp
     */
    public function setTxtmailresponsable($txtmailresponsable)
    {
        $this->txtmailresponsable = $txtmailresponsable;

        return $this;
    }

    /**
     * Get txtmailresponsable
     *
     * @return string
     */
    public function getTxtmailresponsable()
    {
        return $this->txtmailresponsable;
    }

    /**
     * Set txttelresponsable
     *
     * @param string $txttelresponsable
     *
     * @return FormPucp
     */
    public function setTxttelresponsable($txttelresponsable)
    {
        $this->txttelresponsable = $txttelresponsable;

        return $this;
    }

    /**
     * Get txttelresponsable
     *
     * @return string
     */
    public function getTxttelresponsable()
    {
        return $this->txttelresponsable;
    }

    /**
     * Set txttipevento
     *
     * @param string $txttipevento
     *
     * @return FormPucp
     */
    public function setTxttipevento($txttipevento)
    {
        $this->txttipevento = $txttipevento;

        return $this;
    }

    /**
     * Get txttipevento
     *
     * @return string
     */
    public function getTxttipevento()
    {
        return $this->txttipevento;
    }

    /**
     * Set txtnameevento
     *
     * @param string $txtnameevento
     *
     * @return FormPucp
     */
    public function setTxtnameevento($txtnameevento)
    {
        $this->txtnameevento = $txtnameevento;

        return $this;
    }

    /**
     * Get txtnameevento
     *
     * @return string
     */
    public function getTxtnameevento()
    {
        return $this->txtnameevento;
    }

    /**
     * Set txtdateinicevento
     *
     * @param string $txtdateinicevento
     *
     * @return FormPucp
     */
    public function setTxtdateinicevento($txtdateinicevento)
    {
        $this->txtdateinicevento = $txtdateinicevento;

        return $this;
    }

    /**
     * Get txtdateinicevento
     *
     * @return string
     */
    public function getTxtdateinicevento()
    {
        return $this->txtdateinicevento;
    }

    /**
     * Set txtdatefinevento
     *
     * @param string $txtdatefinevento
     *
     * @return FormPucp
     */
    public function setTxtdatefinevento($txtdatefinevento)
    {
        $this->txtdatefinevento = $txtdatefinevento;

        return $this;
    }

    /**
     * Get txtdatefinevento
     *
     * @return string
     */
    public function getTxtdatefinevento()
    {
        return $this->txtdatefinevento;
    }

    /**
     * Set txtdateinchoraevnt
     *
     * @param string $txtdateinchoraevnt
     *
     * @return FormPucp
     */
    public function setTxtdateinchoraevnt($txtdateinchoraevnt)
    {
        $this->txtdateinchoraevnt = $txtdateinchoraevnt;

        return $this;
    }

    /**
     * Get txtdateinchoraevnt
     *
     * @return string
     */
    public function getTxtdateinchoraevnt()
    {
        return $this->txtdateinchoraevnt;
    }

    /**
     * Set txtfindatehoraevent
     *
     * @param string $txtfindatehoraevent
     *
     * @return FormPucp
     */
    public function setTxtfindatehoraevent($txtfindatehoraevent)
    {
        $this->txtfindatehoraevent = $txtfindatehoraevent;

        return $this;
    }

    /**
     * Get txtfindatehoraevent
     *
     * @return string
     */
    public function getTxtfindatehoraevent()
    {
        return $this->txtfindatehoraevent;
    }

    /**
     * Set txttemas
     *
     * @param string $txttemas
     *
     * @return FormPucp
     */
    public function setTxttemas($txttemas)
    {
        $this->txttemas = $txttemas;

        return $this;
    }

    /**
     * Get txttemas
     *
     * @return string
     */
    public function getTxttemas()
    {
        return $this->txttemas;
    }

    /**
     * Set txtnombreexpositores
     *
     * @param string $txtnombreexpositores
     *
     * @return FormPucp
     */
    public function setTxtnombreexpositores($txtnombreexpositores)
    {
        $this->txtnombreexpositores = $txtnombreexpositores;

        return $this;
    }

    /**
     * Get txtnombreexpositores
     *
     * @return string
     */
    public function getTxtnombreexpositores()
    {
        return $this->txtnombreexpositores;
    }

    /**
     * Set cboingresoevento
     *
     * @param string $cboingresoevento
     *
     * @return FormPucp
     */
    public function setCboingresoevento($cboingresoevento)
    {
        $this->cboingresoevento = $cboingresoevento;

        return $this;
    }

    /**
     * Get cboingresoevento
     *
     * @return string
     */
    public function getCboingresoevento()
    {
        return $this->cboingresoevento;
    }

    /**
     * Set cbosalatipoauditorio
     *
     * @param string $cbosalatipoauditorio
     *
     * @return FormPucp
     */
    public function setCbosalatipoauditorio($cbosalatipoauditorio)
    {
        $this->cbosalatipoauditorio = $cbosalatipoauditorio;

        return $this;
    }

    /**
     * Get cbosalatipoauditorio
     *
     * @return string
     */
    public function getCbosalatipoauditorio()
    {
        return $this->cbosalatipoauditorio;
    }

    /**
     * Set cbodirectorio
     *
     * @param string $cbodirectorio
     *
     * @return FormPucp
     */
    public function setCbodirectorio($cbodirectorio)
    {
        $this->cbodirectorio = $cbodirectorio;

        return $this;
    }

    /**
     * Get cbodirectorio
     *
     * @return string
     */
    public function getCbodirectorio()
    {
        return $this->cbodirectorio;
    }

    /**
     * Set cbosalondeclases
     *
     * @param string $cbosalondeclases
     *
     * @return FormPucp
     */
    public function setCbosalondeclases($cbosalondeclases)
    {
        $this->cbosalondeclases = $cbosalondeclases;

        return $this;
    }

    /**
     * Get cbosalondeclases
     *
     * @return string
     */
    public function getCbosalondeclases()
    {
        return $this->cbosalondeclases;
    }

    /**
     * Set cbosalamesasu
     *
     * @param string $cbosalamesasu
     *
     * @return FormPucp
     */
    public function setCbosalamesasu($cbosalamesasu)
    {
        $this->cbosalamesasu = $cbosalamesasu;

        return $this;
    }

    /**
     * Get cbosalamesasu
     *
     * @return string
     */
    public function getCbosalamesasu()
    {
        return $this->cbosalamesasu;
    }

    /**
     * Set rdoproyector
     *
     * @param string $rdoproyector
     *
     * @return FormPucp
     */
    public function setRdoproyector($rdoproyector)
    {
        $this->rdoproyector = $rdoproyector;

        return $this;
    }

    /**
     * Get rdoproyector
     *
     * @return string
     */
    public function getRdoproyector()
    {
        return $this->rdoproyector;
    }

    /**
     * Set rdopizarra
     *
     * @param string $rdopizarra
     *
     * @return FormPucp
     */
    public function setRdopizarra($rdopizarra)
    {
        $this->rdopizarra = $rdopizarra;

        return $this;
    }

    /**
     * Get rdopizarra
     *
     * @return string
     */
    public function getRdopizarra()
    {
        return $this->rdopizarra;
    }

    /**
     * Set rdodvd
     *
     * @param string $rdodvd
     *
     * @return FormPucp
     */
    public function setRdodvd($rdodvd)
    {
        $this->rdodvd = $rdodvd;

        return $this;
    }

    /**
     * Get rdodvd
     *
     * @return string
     */
    public function getRdodvd()
    {
        return $this->rdodvd;
    }

    /**
     * Set rdomicrofonos
     *
     * @param string $rdomicrofonos
     *
     * @return FormPucp
     */
    public function setRdomicrofonos($rdomicrofonos)
    {
        $this->rdomicrofonos = $rdomicrofonos;

        return $this;
    }

    /**
     * Get rdomicrofonos
     *
     * @return string
     */
    public function getRdomicrofonos()
    {
        return $this->rdomicrofonos;
    }

    /**
     * Set rdomesaregistroparticipantes
     *
     * @param string $rdomesaregistroparticipantes
     *
     * @return FormPucp
     */
    public function setRdomesaregistroparticipantes($rdomesaregistroparticipantes)
    {
        $this->rdomesaregistroparticipantes = $rdomesaregistroparticipantes;

        return $this;
    }

    /**
     * Get rdomesaregistroparticipantes
     *
     * @return string
     */
    public function getRdomesaregistroparticipantes()
    {
        return $this->rdomesaregistroparticipantes;
    }

    /**
     * Set txtcomentario
     *
     * @param string $txtcomentario
     *
     * @return FormPucp
     */
    public function setTxtcomentario($txtcomentario)
    {
        $this->txtcomentario = $txtcomentario;

        return $this;
    }

    /**
     * Get txtcomentario
     *
     * @return string
     */
    public function getTxtcomentario()
    {
        return $this->txtcomentario;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return FormPucp
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }
}

