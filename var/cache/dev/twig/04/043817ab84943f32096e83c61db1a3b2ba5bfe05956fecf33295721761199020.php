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
        $__internal_c7a459459478fff65d5fa08d060126fe25d38ee4bf2d77117d36a0a2c789ffda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7a459459478fff65d5fa08d060126fe25d38ee4bf2d77117d36a0a2c789ffda->enter($__internal_c7a459459478fff65d5fa08d060126fe25d38ee4bf2d77117d36a0a2c789ffda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_7050a3e14b5401cf32f24123ecb618157cb69eeb60d2b2338b80fbe09d5ab150 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7050a3e14b5401cf32f24123ecb618157cb69eeb60d2b2338b80fbe09d5ab150->enter($__internal_7050a3e14b5401cf32f24123ecb618157cb69eeb60d2b2338b80fbe09d5ab150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7a459459478fff65d5fa08d060126fe25d38ee4bf2d77117d36a0a2c789ffda->leave($__internal_c7a459459478fff65d5fa08d060126fe25d38ee4bf2d77117d36a0a2c789ffda_prof);

        
        $__internal_7050a3e14b5401cf32f24123ecb618157cb69eeb60d2b2338b80fbe09d5ab150->leave($__internal_7050a3e14b5401cf32f24123ecb618157cb69eeb60d2b2338b80fbe09d5ab150_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_36025c6fb64cba993aa98c16817b87cb4edada65ca42dede73def5fb40f74031 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36025c6fb64cba993aa98c16817b87cb4edada65ca42dede73def5fb40f74031->enter($__internal_36025c6fb64cba993aa98c16817b87cb4edada65ca42dede73def5fb40f74031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f739da4cfa4fb4e1e2f2db46e7bec5dfad452304fcffab6c61cabc7ca65cf079 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f739da4cfa4fb4e1e2f2db46e7bec5dfad452304fcffab6c61cabc7ca65cf079->enter($__internal_f739da4cfa4fb4e1e2f2db46e7bec5dfad452304fcffab6c61cabc7ca65cf079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f739da4cfa4fb4e1e2f2db46e7bec5dfad452304fcffab6c61cabc7ca65cf079->leave($__internal_f739da4cfa4fb4e1e2f2db46e7bec5dfad452304fcffab6c61cabc7ca65cf079_prof);

        
        $__internal_36025c6fb64cba993aa98c16817b87cb4edada65ca42dede73def5fb40f74031->leave($__internal_36025c6fb64cba993aa98c16817b87cb4edada65ca42dede73def5fb40f74031_prof);

    }

    // line 22
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_88ac7d32ff31fa312d600cb04778204e05957874977baa4e58c0101d46acf725 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88ac7d32ff31fa312d600cb04778204e05957874977baa4e58c0101d46acf725->enter($__internal_88ac7d32ff31fa312d600cb04778204e05957874977baa4e58c0101d46acf725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2c873fec4e9044adaff04983b7577fca3f5fcfabfa2b9f3da12335e7e11a5d52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c873fec4e9044adaff04983b7577fca3f5fcfabfa2b9f3da12335e7e11a5d52->enter($__internal_2c873fec4e9044adaff04983b7577fca3f5fcfabfa2b9f3da12335e7e11a5d52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 23
        echo "    ";
        
        $__internal_2c873fec4e9044adaff04983b7577fca3f5fcfabfa2b9f3da12335e7e11a5d52->leave($__internal_2c873fec4e9044adaff04983b7577fca3f5fcfabfa2b9f3da12335e7e11a5d52_prof);

        
        $__internal_88ac7d32ff31fa312d600cb04778204e05957874977baa4e58c0101d46acf725->leave($__internal_88ac7d32ff31fa312d600cb04778204e05957874977baa4e58c0101d46acf725_prof);

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
