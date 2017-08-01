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
        $__internal_0cf8651edc93d12202f03e4fdc4855eb03f55934e330edec5ec8a0fa0c8e2e79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cf8651edc93d12202f03e4fdc4855eb03f55934e330edec5ec8a0fa0c8e2e79->enter($__internal_0cf8651edc93d12202f03e4fdc4855eb03f55934e330edec5ec8a0fa0c8e2e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_6dfa00545c1305f225186f80e67555a0ecdf807420fce5700484dd157d66b236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dfa00545c1305f225186f80e67555a0ecdf807420fce5700484dd157d66b236->enter($__internal_6dfa00545c1305f225186f80e67555a0ecdf807420fce5700484dd157d66b236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cf8651edc93d12202f03e4fdc4855eb03f55934e330edec5ec8a0fa0c8e2e79->leave($__internal_0cf8651edc93d12202f03e4fdc4855eb03f55934e330edec5ec8a0fa0c8e2e79_prof);

        
        $__internal_6dfa00545c1305f225186f80e67555a0ecdf807420fce5700484dd157d66b236->leave($__internal_6dfa00545c1305f225186f80e67555a0ecdf807420fce5700484dd157d66b236_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_60e55a6d539462cbdc14d190ce522812682397d7610b5b5226031809c5e36c5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60e55a6d539462cbdc14d190ce522812682397d7610b5b5226031809c5e36c5d->enter($__internal_60e55a6d539462cbdc14d190ce522812682397d7610b5b5226031809c5e36c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8b4c9ceb1467ec1698eb7e7f24f5077319e5e6f59730b312d8bc71c33b352b82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b4c9ceb1467ec1698eb7e7f24f5077319e5e6f59730b312d8bc71c33b352b82->enter($__internal_8b4c9ceb1467ec1698eb7e7f24f5077319e5e6f59730b312d8bc71c33b352b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8b4c9ceb1467ec1698eb7e7f24f5077319e5e6f59730b312d8bc71c33b352b82->leave($__internal_8b4c9ceb1467ec1698eb7e7f24f5077319e5e6f59730b312d8bc71c33b352b82_prof);

        
        $__internal_60e55a6d539462cbdc14d190ce522812682397d7610b5b5226031809c5e36c5d->leave($__internal_60e55a6d539462cbdc14d190ce522812682397d7610b5b5226031809c5e36c5d_prof);

    }

    // line 22
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d2d27a252fef9c8b20d80f57b366ec985083dcbaa295d430858a2f9518979e25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2d27a252fef9c8b20d80f57b366ec985083dcbaa295d430858a2f9518979e25->enter($__internal_d2d27a252fef9c8b20d80f57b366ec985083dcbaa295d430858a2f9518979e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1211f3f7f7c320f228db4808766a1305816a03a5913d52ad6b820054f0c1c929 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1211f3f7f7c320f228db4808766a1305816a03a5913d52ad6b820054f0c1c929->enter($__internal_1211f3f7f7c320f228db4808766a1305816a03a5913d52ad6b820054f0c1c929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 23
        echo "    ";
        
        $__internal_1211f3f7f7c320f228db4808766a1305816a03a5913d52ad6b820054f0c1c929->leave($__internal_1211f3f7f7c320f228db4808766a1305816a03a5913d52ad6b820054f0c1c929_prof);

        
        $__internal_d2d27a252fef9c8b20d80f57b366ec985083dcbaa295d430858a2f9518979e25->leave($__internal_d2d27a252fef9c8b20d80f57b366ec985083dcbaa295d430858a2f9518979e25_prof);

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
