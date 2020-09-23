<?php

class __Mustache_e2db3371f5dfa580c197884d799a641f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="discussion-container-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" data-content="forum-discussion">
';
        // 'html' section
        $value = $context->find('html');
        $buffer .= $this->section9569e96a4fa070661af7dc6dd27c546d($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'notifications' section
        $value = $context->find('notifications');
        $buffer .= $this->section26a9308d22dfafcc85bc2d50de412784($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '  ';
        $value = $this->resolveValue($context->findDot('html.posts'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  ';
        // 'html.neighbourlinks' section
        $value = $context->findDot('html.neighbourlinks');
        $buffer .= $this->sectionFb8e8ddc9ca3702110812af7d06781d6($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '</div>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->sectionD6b2984233bd48a6164279b19af32259($context, $indent, $value);

        return $buffer;
    }

    private function sectionCe6d558868f00c32d2168cda71485311(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      <div class="d-flex flex-wrap flex-row-reverse text-right ccn-forum-discussion-tools" data-container="discussion-tools">
        <div class="discussion-settings-menu">
          {{> mod_forum/forum_action_menu}}
        </div>
      </div>
    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '      <div class="d-flex flex-wrap flex-row-reverse text-right ccn-forum-discussion-tools" data-container="discussion-tools">
';
                $buffer .= $indent . '        <div class="discussion-settings-menu">
';
                if ($partial = $this->mustache->loadPartial('mod_forum/forum_action_menu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '          ');
                }
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '      </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section29cf713cc55fb31d24a382fdf5a933ab(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'ml-2';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'ml-2';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9569e96a4fa070661af7dc6dd27c546d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#hasanyactions}}
      <div class="d-flex flex-wrap flex-row-reverse text-right ccn-forum-discussion-tools" data-container="discussion-tools">
        <div class="discussion-settings-menu">
          {{> mod_forum/forum_action_menu}}
        </div>
      </div>
    {{/hasanyactions}}
    <div class="ccn-forum-top-links">
      <div class="ccn-forum-top-nav">
        {{{neighbourlinks}}}
      </div>
      <div class="ccn-forum-top-selectors">
        <div class="d-flex flex-wrap ccn-forum-discussion-selectors">
          <div>{{{exportdiscussion}}}</div>
          <div class="{{#exportdiscussion}}ml-2{{/exportdiscussion}}">{{{modeselectorform}}}</div>
          <div class="ml-2">{{{movediscussion}}}</div>
        </div>
      </div>
    </div>

  ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                // 'hasanyactions' section
                $value = $context->find('hasanyactions');
                $buffer .= $this->sectionCe6d558868f00c32d2168cda71485311($context, $indent, $value);
                $buffer .= $indent . '    <div class="ccn-forum-top-links">
';
                $buffer .= $indent . '      <div class="ccn-forum-top-nav">
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('neighbourlinks'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '      <div class="ccn-forum-top-selectors">
';
                $buffer .= $indent . '        <div class="d-flex flex-wrap ccn-forum-discussion-selectors">
';
                $buffer .= $indent . '          <div>';
                $value = $this->resolveValue($context->find('exportdiscussion'), $context);
                $buffer .= $value;
                $buffer .= '</div>
';
                $buffer .= $indent . '          <div class="';
                // 'exportdiscussion' section
                $value = $context->find('exportdiscussion');
                $buffer .= $this->section29cf713cc55fb31d24a382fdf5a933ab($context, $indent, $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('modeselectorform'), $context);
                $buffer .= $value;
                $buffer .= '</div>
';
                $buffer .= $indent . '          <div class="ml-2">';
                $value = $this->resolveValue($context->find('movediscussion'), $context);
                $buffer .= $value;
                $buffer .= '</div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section26a9308d22dfafcc85bc2d50de412784(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{> core/notification}}
  ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/notification')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFb8e8ddc9ca3702110812af7d06781d6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{.}}}';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= $value;
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD6b2984233bd48a6164279b19af32259(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  require(
  [
  \'jquery\',
  \'core/templates\',
  \'mod_forum/discussion\',
  \'mod_forum/posts_list\',
  \'mod_forum/lock_toggle\',
  \'mod_forum/favourite_toggle\',
  \'mod_forum/pin_toggle\',
  \'mod_forum/subscription_toggle\'
  ],
  function(
  $,
  Templates,
  Discussion,
  PostsList,
  LockToggle,
  FavouriteToggle,
  Pin,
  SubscribeToggle
  ) {
  var root = $("[data-content=\'forum-discussion\']");
  Discussion.init(root);
  PostsList.init(root);
  root = $(\'[data-container="discussion-tools"]\');
  LockToggle.init(root, true);
  FavouriteToggle.init(root, true, function(toggleElement, context) {
  return Templates.render(\'mod_forum/discussion_favourite_toggle\', context)
  .then(function(html, js) {
  return Templates.replaceNode(toggleElement, html, js);
  });
  });
  Pin.init(root, true, function(toggleElement, context) {
  return Templates.render(\'mod_forum/discussion_pin_toggle\', context)
  .then(function(html, js) {
  return Templates.replaceNode(toggleElement, html, js);
  });
  });
  SubscribeToggle.init(root, true, function(toggleElement, context) {
  return Templates.render(\'mod_forum/discussion_subscription_toggle\', context)
  .then(function(html, js) {
  return Templates.replaceNode(toggleElement, html, js);
  });
  });
  });
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  require(
';
                $buffer .= $indent . '  [
';
                $buffer .= $indent . '  \'jquery\',
';
                $buffer .= $indent . '  \'core/templates\',
';
                $buffer .= $indent . '  \'mod_forum/discussion\',
';
                $buffer .= $indent . '  \'mod_forum/posts_list\',
';
                $buffer .= $indent . '  \'mod_forum/lock_toggle\',
';
                $buffer .= $indent . '  \'mod_forum/favourite_toggle\',
';
                $buffer .= $indent . '  \'mod_forum/pin_toggle\',
';
                $buffer .= $indent . '  \'mod_forum/subscription_toggle\'
';
                $buffer .= $indent . '  ],
';
                $buffer .= $indent . '  function(
';
                $buffer .= $indent . '  $,
';
                $buffer .= $indent . '  Templates,
';
                $buffer .= $indent . '  Discussion,
';
                $buffer .= $indent . '  PostsList,
';
                $buffer .= $indent . '  LockToggle,
';
                $buffer .= $indent . '  FavouriteToggle,
';
                $buffer .= $indent . '  Pin,
';
                $buffer .= $indent . '  SubscribeToggle
';
                $buffer .= $indent . '  ) {
';
                $buffer .= $indent . '  var root = $("[data-content=\'forum-discussion\']");
';
                $buffer .= $indent . '  Discussion.init(root);
';
                $buffer .= $indent . '  PostsList.init(root);
';
                $buffer .= $indent . '  root = $(\'[data-container="discussion-tools"]\');
';
                $buffer .= $indent . '  LockToggle.init(root, true);
';
                $buffer .= $indent . '  FavouriteToggle.init(root, true, function(toggleElement, context) {
';
                $buffer .= $indent . '  return Templates.render(\'mod_forum/discussion_favourite_toggle\', context)
';
                $buffer .= $indent . '  .then(function(html, js) {
';
                $buffer .= $indent . '  return Templates.replaceNode(toggleElement, html, js);
';
                $buffer .= $indent . '  });
';
                $buffer .= $indent . '  });
';
                $buffer .= $indent . '  Pin.init(root, true, function(toggleElement, context) {
';
                $buffer .= $indent . '  return Templates.render(\'mod_forum/discussion_pin_toggle\', context)
';
                $buffer .= $indent . '  .then(function(html, js) {
';
                $buffer .= $indent . '  return Templates.replaceNode(toggleElement, html, js);
';
                $buffer .= $indent . '  });
';
                $buffer .= $indent . '  });
';
                $buffer .= $indent . '  SubscribeToggle.init(root, true, function(toggleElement, context) {
';
                $buffer .= $indent . '  return Templates.render(\'mod_forum/discussion_subscription_toggle\', context)
';
                $buffer .= $indent . '  .then(function(html, js) {
';
                $buffer .= $indent . '  return Templates.replaceNode(toggleElement, html, js);
';
                $buffer .= $indent . '  });
';
                $buffer .= $indent . '  });
';
                $buffer .= $indent . '  });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
