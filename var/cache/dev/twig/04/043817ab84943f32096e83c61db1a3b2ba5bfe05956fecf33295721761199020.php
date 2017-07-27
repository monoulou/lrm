<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_1cec2e73f6703f2ee777bea2a830ce55d050f56bfd7489670bbb1c6dc4c6d03e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/layout.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_111ae2a0d9c9ec6ad1305331e4f372145914a60b44350df70a6bf85133d76a56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_111ae2a0d9c9ec6ad1305331e4f372145914a60b44350df70a6bf85133d76a56->enter($__internal_111ae2a0d9c9ec6ad1305331e4f372145914a60b44350df70a6bf85133d76a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_515449b27fcd3ecfd827ac95398ae4040565986f17c6377a32799af1b9989947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_515449b27fcd3ecfd827ac95398ae4040565986f17c6377a32799af1b9989947->enter($__internal_515449b27fcd3ecfd827ac95398ae4040565986f17c6377a32799af1b9989947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_111ae2a0d9c9ec6ad1305331e4f372145914a60b44350df70a6bf85133d76a56->leave($__internal_111ae2a0d9c9ec6ad1305331e4f372145914a60b44350df70a6bf85133d76a56_prof);

        
        $__internal_515449b27fcd3ecfd827ac95398ae4040565986f17c6377a32799af1b9989947->leave($__internal_515449b27fcd3ecfd827ac95398ae4040565986f17c6377a32799af1b9989947_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed046c430ce8a47b6a11e0baf1c9e02b3eb48030bfb912bf87cd7ade2710ee2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed046c430ce8a47b6a11e0baf1c9e02b3eb48030bfb912bf87cd7ade2710ee2c->enter($__internal_ed046c430ce8a47b6a11e0baf1c9e02b3eb48030bfb912bf87cd7ade2710ee2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0bd7ac50a6bb961c21fc2daf9d76400e4a65e16882bea866f6781bd5e86777a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bd7ac50a6bb961c21fc2daf9d76400e4a65e16882bea866f6781bd5e86777a0->enter($__internal_0bd7ac50a6bb961c21fc2daf9d76400e4a65e16882bea866f6781bd5e86777a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    ";
        // line 8
        echo "
        <div class=\"row\" style=\"margin-top: 20px; margin-left: -35px\">
            <div class=\"col-lg-3\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 12
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 13
                echo "                        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
                            ";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            </div>
        </div>

    ";
        // line 22
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 24
        echo "
";
        
        $__internal_0bd7ac50a6bb961c21fc2daf9d76400e4a65e16882bea866f6781bd5e86777a0->leave($__internal_0bd7ac50a6bb961c21fc2daf9d76400e4a65e16882bea866f6781bd5e86777a0_prof);

        
        $__internal_ed046c430ce8a47b6a11e0baf1c9e02b3eb48030bfb912bf87cd7ade2710ee2c->leave($__internal_ed046c430ce8a47b6a11e0baf1c9e02b3eb48030bfb912bf87cd7ade2710ee2c_prof);

    }

    // line 22
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f0f6a64357c620ba78e431c66225d1571d28617828a10303b0ba4f3f13e2c494 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0f6a64357c620ba78e431c66225d1571d28617828a10303b0ba4f3f13e2c494->enter($__internal_f0f6a64357c620ba78e431c66225d1571d28617828a10303b0ba4f3f13e2c494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5dffd56308b08fc1bd2a56d4b7cc9b82cd3cb363bc2dde59ed6e0145a89fe5e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dffd56308b08fc1bd2a56d4b7cc9b82cd3cb363bc2dde59ed6e0145a89fe5e6->enter($__internal_5dffd56308b08fc1bd2a56d4b7cc9b82cd3cb363bc2dde59ed6e0145a89fe5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 23
        echo "    ";
        
        $__internal_5dffd56308b08fc1bd2a56d4b7cc9b82cd3cb363bc2dde59ed6e0145a89fe5e6->leave($__internal_5dffd56308b08fc1bd2a56d4b7cc9b82cd3cb363bc2dde59ed6e0145a89fe5e6_prof);

        
        $__internal_f0f6a64357c620ba78e431c66225d1571d28617828a10303b0ba4f3f13e2c494->leave($__internal_f0f6a64357c620ba78e431c66225d1571d28617828a10303b0ba4f3f13e2c494_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 23,  105 => 22,  94 => 24,  91 => 22,  86 => 18,  80 => 17,  71 => 14,  66 => 13,  61 => 12,  57 => 11,  52 => 8,  50 => 7,  41 => 6,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{# On étend notre layout #}
{% extends \"base.html.twig\" %}

{# Dans notre layout, il faut définir le block body #}
{% block body %}
    {# On affiche les messages flash que définissent les contrôleurs du bundle #}

        <div class=\"row\" style=\"margin-top: 20px; margin-left: -35px\">
            <div class=\"col-lg-3\">
                {% for key, messages in app.session.flashbag.all() %}
                    {% for message in messages %}
                        <div class=\"alert alert-{{ key }}\">
                            {{ message|trans({}, 'FOSUserBundle') }}
                        </div>
                    {% endfor %}
                {% endfor %}
            </div>
        </div>

    {# On définit ce block, dans lequel vont venir s'insérer les autres vues du bundle #}
    {% block fos_user_content %}
    {% endblock fos_user_content %}

{% endblock %}


", "@FOSUser/layout.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle\\Resources\\views\\layout.html.twig");
    }
}
