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
        $__internal_9ce56382e47f6188164c6bac14583f4f1d341fcc1bc83b4accf0d0174a93755c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ce56382e47f6188164c6bac14583f4f1d341fcc1bc83b4accf0d0174a93755c->enter($__internal_9ce56382e47f6188164c6bac14583f4f1d341fcc1bc83b4accf0d0174a93755c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_05080bde234cd2b18ebec00e323b015a2b2285b71e66dd0df0df3055a4a9cf23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05080bde234cd2b18ebec00e323b015a2b2285b71e66dd0df0df3055a4a9cf23->enter($__internal_05080bde234cd2b18ebec00e323b015a2b2285b71e66dd0df0df3055a4a9cf23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ce56382e47f6188164c6bac14583f4f1d341fcc1bc83b4accf0d0174a93755c->leave($__internal_9ce56382e47f6188164c6bac14583f4f1d341fcc1bc83b4accf0d0174a93755c_prof);

        
        $__internal_05080bde234cd2b18ebec00e323b015a2b2285b71e66dd0df0df3055a4a9cf23->leave($__internal_05080bde234cd2b18ebec00e323b015a2b2285b71e66dd0df0df3055a4a9cf23_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_74b6e3036c558c2365969ca488ea98bfbd41027c82b8c163aaf43aa4804247af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74b6e3036c558c2365969ca488ea98bfbd41027c82b8c163aaf43aa4804247af->enter($__internal_74b6e3036c558c2365969ca488ea98bfbd41027c82b8c163aaf43aa4804247af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_90ab3d420065f8e4df28d4d5b3f5951ec692fd2639dbfc0c95dfb981fd795cc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90ab3d420065f8e4df28d4d5b3f5951ec692fd2639dbfc0c95dfb981fd795cc6->enter($__internal_90ab3d420065f8e4df28d4d5b3f5951ec692fd2639dbfc0c95dfb981fd795cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_90ab3d420065f8e4df28d4d5b3f5951ec692fd2639dbfc0c95dfb981fd795cc6->leave($__internal_90ab3d420065f8e4df28d4d5b3f5951ec692fd2639dbfc0c95dfb981fd795cc6_prof);

        
        $__internal_74b6e3036c558c2365969ca488ea98bfbd41027c82b8c163aaf43aa4804247af->leave($__internal_74b6e3036c558c2365969ca488ea98bfbd41027c82b8c163aaf43aa4804247af_prof);

    }

    // line 22
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_28914a964cb74031ff62bf1bbb922706d8d38e0b83157924677042c5a75bb13e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28914a964cb74031ff62bf1bbb922706d8d38e0b83157924677042c5a75bb13e->enter($__internal_28914a964cb74031ff62bf1bbb922706d8d38e0b83157924677042c5a75bb13e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_941c6c40282c72fe5111312a08f90f9bcbb7320a956fba8ff2ad28c76b29b630 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_941c6c40282c72fe5111312a08f90f9bcbb7320a956fba8ff2ad28c76b29b630->enter($__internal_941c6c40282c72fe5111312a08f90f9bcbb7320a956fba8ff2ad28c76b29b630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 23
        echo "    ";
        
        $__internal_941c6c40282c72fe5111312a08f90f9bcbb7320a956fba8ff2ad28c76b29b630->leave($__internal_941c6c40282c72fe5111312a08f90f9bcbb7320a956fba8ff2ad28c76b29b630_prof);

        
        $__internal_28914a964cb74031ff62bf1bbb922706d8d38e0b83157924677042c5a75bb13e->leave($__internal_28914a964cb74031ff62bf1bbb922706d8d38e0b83157924677042c5a75bb13e_prof);

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
