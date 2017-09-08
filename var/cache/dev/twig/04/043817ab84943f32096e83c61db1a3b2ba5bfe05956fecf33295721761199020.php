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
        $__internal_155420fd4909d1f86d04b89581283c8046ce711c13fde1f012f64b58841612f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_155420fd4909d1f86d04b89581283c8046ce711c13fde1f012f64b58841612f9->enter($__internal_155420fd4909d1f86d04b89581283c8046ce711c13fde1f012f64b58841612f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_573b3ca910e8bd0f78f26bd90b655d86303ae0d5cc222202dc385812e0f21da1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_573b3ca910e8bd0f78f26bd90b655d86303ae0d5cc222202dc385812e0f21da1->enter($__internal_573b3ca910e8bd0f78f26bd90b655d86303ae0d5cc222202dc385812e0f21da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_155420fd4909d1f86d04b89581283c8046ce711c13fde1f012f64b58841612f9->leave($__internal_155420fd4909d1f86d04b89581283c8046ce711c13fde1f012f64b58841612f9_prof);

        
        $__internal_573b3ca910e8bd0f78f26bd90b655d86303ae0d5cc222202dc385812e0f21da1->leave($__internal_573b3ca910e8bd0f78f26bd90b655d86303ae0d5cc222202dc385812e0f21da1_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb6d43a17c17ef9e8b90609dd89cb8bcb781bfad7ea7ba79086081765d2e211c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb6d43a17c17ef9e8b90609dd89cb8bcb781bfad7ea7ba79086081765d2e211c->enter($__internal_eb6d43a17c17ef9e8b90609dd89cb8bcb781bfad7ea7ba79086081765d2e211c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2bed5a2865f75a8d5a9dfd04c263efd4a7edfab7987e5e813c6eb190fa9e4745 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bed5a2865f75a8d5a9dfd04c263efd4a7edfab7987e5e813c6eb190fa9e4745->enter($__internal_2bed5a2865f75a8d5a9dfd04c263efd4a7edfab7987e5e813c6eb190fa9e4745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2bed5a2865f75a8d5a9dfd04c263efd4a7edfab7987e5e813c6eb190fa9e4745->leave($__internal_2bed5a2865f75a8d5a9dfd04c263efd4a7edfab7987e5e813c6eb190fa9e4745_prof);

        
        $__internal_eb6d43a17c17ef9e8b90609dd89cb8bcb781bfad7ea7ba79086081765d2e211c->leave($__internal_eb6d43a17c17ef9e8b90609dd89cb8bcb781bfad7ea7ba79086081765d2e211c_prof);

    }

    // line 22
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ca8a8f01ad8d70c368d919016619d79ee6748b292a3da25b591aa75f96ecb72d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca8a8f01ad8d70c368d919016619d79ee6748b292a3da25b591aa75f96ecb72d->enter($__internal_ca8a8f01ad8d70c368d919016619d79ee6748b292a3da25b591aa75f96ecb72d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_48a6e45bd756d3c1167a4d7f441ea47f7763b1eaad3bf61466b81d94f5fe6f82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48a6e45bd756d3c1167a4d7f441ea47f7763b1eaad3bf61466b81d94f5fe6f82->enter($__internal_48a6e45bd756d3c1167a4d7f441ea47f7763b1eaad3bf61466b81d94f5fe6f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 23
        echo "    ";
        
        $__internal_48a6e45bd756d3c1167a4d7f441ea47f7763b1eaad3bf61466b81d94f5fe6f82->leave($__internal_48a6e45bd756d3c1167a4d7f441ea47f7763b1eaad3bf61466b81d94f5fe6f82_prof);

        
        $__internal_ca8a8f01ad8d70c368d919016619d79ee6748b292a3da25b591aa75f96ecb72d->leave($__internal_ca8a8f01ad8d70c368d919016619d79ee6748b292a3da25b591aa75f96ecb72d_prof);

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
