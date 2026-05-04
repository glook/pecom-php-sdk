<?php

namespace glook\PecomSdk\Generated\Model;

class AbbreviatedReceiver
{
    /**
     * блок выводится, если получатель юр.лицо или ИП (наименование юр.лица/ИП не содержит)
     *
     * @var AbbreviatedReceiverLegalPerson|null
     */
    protected $legalPerson;
    /**
     * блок выводится, если получатель - физичекое лицо. В противном случае блок не выводится
     *
     * @var AbbreviatedReceiverPrivatePerson|null
     */
    protected $privatePerson;
    /**
     * блок выводится, если получатель юр.лицо или ИП (наименование юр.лица/ИП не содержит)
     *
     * @return AbbreviatedReceiverLegalPerson|null
     */
    public function getLegalPerson() : ?AbbreviatedReceiverLegalPerson
    {
        return $this->legalPerson;
    }
    /**
     * блок выводится, если получатель юр.лицо или ИП (наименование юр.лица/ИП не содержит)
     *
     * @param AbbreviatedReceiverLegalPerson|null $legalPerson
     *
     * @return self
     */
    public function setLegalPerson(?AbbreviatedReceiverLegalPerson $legalPerson) : self
    {
        $this->legalPerson = $legalPerson;
        return $this;
    }
    /**
     * блок выводится, если получатель - физичекое лицо. В противном случае блок не выводится
     *
     * @return AbbreviatedReceiverPrivatePerson|null
     */
    public function getPrivatePerson() : ?AbbreviatedReceiverPrivatePerson
    {
        return $this->privatePerson;
    }
    /**
     * блок выводится, если получатель - физичекое лицо. В противном случае блок не выводится
     *
     * @param AbbreviatedReceiverPrivatePerson|null $privatePerson
     *
     * @return self
     */
    public function setPrivatePerson(?AbbreviatedReceiverPrivatePerson $privatePerson) : self
    {
        $this->privatePerson = $privatePerson;
        return $this;
    }
}