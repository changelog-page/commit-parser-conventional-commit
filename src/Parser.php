<?php

declare(strict_types=1);

namespace Changelog\CommitParser\ConventionalCommit;

use Changelog\CommitParser\AbstractCommitParser;

final class Parser extends AbstractCommitParser
{
    public function pattern(): string
    {
        return '/^(?<type>\w*)(?:\((?<scope>.*)\))?(?<breaking>!)?:\s(?<subject>(?:(?!#).)*(?:(?!\s).))\s?(?<ticket>#\d*)?$/u';
    }
}
