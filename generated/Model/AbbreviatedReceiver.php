<?php

namespace glook\PecomSdk\Generated\Model;

class AbbreviatedReceiver
{
    /**
     * блок выводится, если получатель юр.лицо или ИП (наименование юр.лица/ИП не содержит)
     *
     * @var null|AbbreviatedReceiverLegalPerson
     */
    protected $legalPerson;

    /**
     * блок выводится, если получатель - физичекое лицо. В противном случае блок не выводится
     *
     * @var null|AbbreviatedReceiverPrivatePerson
     */
    protected $privatePerson;

    /**
     * блок выводится, если получатель юр.лицо или ИП (наименование юр.лица/ИП не содержит)
     */
    public function getLegalPerson(): ?AbbreviatedReceiverLegalPerson
    {
        return $this->legalPerson;
    }

    /**
     * блок выводится, если получатель юр.лицо или ИП (наименование юр.лица/ИП не содержит)
     */
    public function setLegalPerson(?AbbreviatedReceiverLegalPerson $legalPerson): self
    {
        $this->legalPerson = $legalPerson;

        return $this;
    }

    /**
     * блок выводится, если получатель - физичекое лицо. В противном случае блок не выводится
     */
    public function getPrivatePerson(): ?AbbreviatedReceiverPrivatePerson
    {
        return $this->privatePerson;
    }

    /**
     * блок выводится, если получатель - физичекое лицо. В противном случае блок не выводится
     */
    public function setPrivatePerson(?AbbreviatedReceiverPrivatePerson $privatePerson): self
    {
        $this->privatePerson = $privatePerson;

        return $this;
    }
}
