<?php

namespace danog\MadelineProto\Settings;

use danog\MadelineProto\SettingsAbstract;

class Ipc extends SettingsAbstract
{
    /**
     * Whether to force full deserialization of instance, without using the IPC server/client.
     *
     * WARNING: this will cause slow startup if enabled.
     */
    protected bool $slow = false;

    public function mergeArray(array $settings): void
    {
        $this->setSlow($settings['ipc']['slow'] ?? $this->getSlow());
    }

    /**
     * Get WARNING: this will cause slow startup if enabled.
     *
     * @return bool
     */
    public function getSlow(): bool
    {
        return $this->slow;
    }

    /**
     * Whether to force full deserialization of instance, without using the IPC server/client.
     *
     * WARNING: this will cause slow startup if enabled.
     *
     * @param bool $slow WARNING: this will cause slow startup if enabled.
     *
     * @return self
     */
    public function setSlow(bool $slow): self
    {
        $this->slow = $slow;

        return $this;
    }
}
