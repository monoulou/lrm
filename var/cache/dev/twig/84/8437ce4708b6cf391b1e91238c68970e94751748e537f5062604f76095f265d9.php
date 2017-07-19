<?php

/* MAUserBundle::layout.html.twig */
class __TwigTemplate_a45249e8ab291201fa5a1fc0ea597318c6c87ce0f40a4411733208584531c458 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "MAUserBundle::layout.html.twig", 3);
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
        $__internal_a42fa6410a5e2bc36a7760860e755d4b210f79400c52d92dd4c2cfd4ff380aee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a42fa6410a5e2bc36a7760860e755d4b210f79400c52d92dd4c2cfd4ff380aee->enter($__internal_a42fa6410a5e2bc36a7760860e755d4b210f79400c52d92dd4c2cfd4ff380aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle::layout.html.twig"));

        $__internal_42bd13e0eac99f5da19046f569ae51c859fc4cddb9b236dc47544952bf87ef15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42bd13e0eac99f5da19046f569ae51c859fc4cddb9b236dc47544952bf87ef15->enter($__internal_42bd13e0eac99f5da19046f569ae51c859fc4cddb9b236dc47544952bf87ef15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a42fa6410a5e2bc36a7760860e755d4b210f79400c52d92dd4c2cfd4ff380aee->leave($__internal_a42fa6410a5e2bc36a7760860e755d4b210f79400c52d92dd4c2cfd4ff380aee_prof);

        
        $__internal_42bd13e0eac99f5da19046f569ae51c859fc4cddb9b236dc47544952bf87ef15->leave($__internal_42bd13e0eac99f5da19046f569ae51c859fc4cddb9b236dc47544952bf87ef15_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_27feed612c4f2f4d54d0b6c4d04baabe4bf63435a0e162f0a7b21e349fdde538 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27feed612c4f2f4d54d0b6c4d04baabe4bf63435a0e162f0a7b21e349fdde538->enter($__internal_27feed612c4f2f4d54d0b6c4d04baabe4bf63435a0e162f0a7b21e349fdde538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cefc5a1e6a91ec900409fe94ad589e32d52925dce098aee24611e79dfe4c5b96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cefc5a1e6a91ec900409fe94ad589e32d52925dce098aee24611e79dfe4c5b96->enter($__internal_cefc5a1e6a91ec900409fe94ad589e32d52925dce098aee24611e79dfe4c5b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cefc5a1e6a91ec900409fe94ad589e32d52925dce098aee24611e79dfe4c5b96->leave($__internal_cefc5a1e6a91ec900409fe94ad589e32d52925dce098aee24611e79dfe4c5b96_prof);

        
        $__internal_27feed612c4f2f4d54d0b6c4d04baabe4bf63435a0e162f0a7b21e349fdde538->leave($__internal_27feed612c4f2f4d54d0b6c4d04baabe4bf63435a0e162f0a7b21e349fdde538_prof);

    }

    // line 22
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fc180f1a13468c8968bb2a8a53aa661bb1c4fb0baa302c54a5ec487b23a0aef0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc180f1a13468c8968bb2a8a53aa661bb1c4fb0baa302c54a5ec487b23a0aef0->enter($__internal_fc180f1a13468c8968bb2a8a53aa661bb1c4fb0baa302c54a5ec487b23a0aef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c257b8c95ecb2f2661c721be122ea710a509dd023af5e522df6dde1a6566f8dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c257b8c95ecb2f2661c721be122ea710a509dd023af5e522df6dde1a6566f8dd->enter($__internal_c257b8c95ecb2f2661c721be122ea710a509dd023af5e522df6dde1a6566f8dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 23
        echo "    ";
        
        $__internal_c257b8c95ecb2f2661c721be122ea710a509dd023af5e522df6dde1a6566f8dd->leave($__internal_c257b8c95ecb2f2661c721be122ea710a509dd023af5e522df6dde1a6566f8dd_prof);

        
        $__internal_fc180f1a13468c8968bb2a8a53aa661bb1c4fb0baa302c54a5ec487b23a0aef0->leave($__internal_fc180f1a13468c8968bb2a8a53aa661bb1c4fb0baa302c54a5ec487b23a0aef0_prof);

    }

    public function getTemplateName()
    {
        return "MAUserBundle::layout.html.twig";
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


", "MAUserBundle::layout.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle/Resources/views/layout.html.twig");
    }
}
