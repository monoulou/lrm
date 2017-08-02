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
        $__internal_bfd3a6588723430be30986eb8b328ad76e8d0cf2e56eef7ad5b2a93bfdb9e1d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfd3a6588723430be30986eb8b328ad76e8d0cf2e56eef7ad5b2a93bfdb9e1d2->enter($__internal_bfd3a6588723430be30986eb8b328ad76e8d0cf2e56eef7ad5b2a93bfdb9e1d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_4454b0b2607eafe9688f8aa95b51b86715c5753999b3d6fc0cd1dbaeeed2493e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4454b0b2607eafe9688f8aa95b51b86715c5753999b3d6fc0cd1dbaeeed2493e->enter($__internal_4454b0b2607eafe9688f8aa95b51b86715c5753999b3d6fc0cd1dbaeeed2493e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfd3a6588723430be30986eb8b328ad76e8d0cf2e56eef7ad5b2a93bfdb9e1d2->leave($__internal_bfd3a6588723430be30986eb8b328ad76e8d0cf2e56eef7ad5b2a93bfdb9e1d2_prof);

        
        $__internal_4454b0b2607eafe9688f8aa95b51b86715c5753999b3d6fc0cd1dbaeeed2493e->leave($__internal_4454b0b2607eafe9688f8aa95b51b86715c5753999b3d6fc0cd1dbaeeed2493e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_080cb6a4b96ab236394e315fddcf9a85e0ee3514f15a7c42cac3deca7356b231 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_080cb6a4b96ab236394e315fddcf9a85e0ee3514f15a7c42cac3deca7356b231->enter($__internal_080cb6a4b96ab236394e315fddcf9a85e0ee3514f15a7c42cac3deca7356b231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_95332aa7ec33dd52f978f09fe8a4eb94c122d8efec47ee5e6fbd8cd27ed9a4f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95332aa7ec33dd52f978f09fe8a4eb94c122d8efec47ee5e6fbd8cd27ed9a4f0->enter($__internal_95332aa7ec33dd52f978f09fe8a4eb94c122d8efec47ee5e6fbd8cd27ed9a4f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_95332aa7ec33dd52f978f09fe8a4eb94c122d8efec47ee5e6fbd8cd27ed9a4f0->leave($__internal_95332aa7ec33dd52f978f09fe8a4eb94c122d8efec47ee5e6fbd8cd27ed9a4f0_prof);

        
        $__internal_080cb6a4b96ab236394e315fddcf9a85e0ee3514f15a7c42cac3deca7356b231->leave($__internal_080cb6a4b96ab236394e315fddcf9a85e0ee3514f15a7c42cac3deca7356b231_prof);

    }

    // line 22
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_87be3cb228c575b0cb6a289d5a32dca04abce2822c9102e0d4ce512ab6e598c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87be3cb228c575b0cb6a289d5a32dca04abce2822c9102e0d4ce512ab6e598c7->enter($__internal_87be3cb228c575b0cb6a289d5a32dca04abce2822c9102e0d4ce512ab6e598c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_38ac6a12b00c2b7a1c708e3ad6a202513d545c8b553941a94a870018fc8059d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38ac6a12b00c2b7a1c708e3ad6a202513d545c8b553941a94a870018fc8059d7->enter($__internal_38ac6a12b00c2b7a1c708e3ad6a202513d545c8b553941a94a870018fc8059d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 23
        echo "    ";
        
        $__internal_38ac6a12b00c2b7a1c708e3ad6a202513d545c8b553941a94a870018fc8059d7->leave($__internal_38ac6a12b00c2b7a1c708e3ad6a202513d545c8b553941a94a870018fc8059d7_prof);

        
        $__internal_87be3cb228c575b0cb6a289d5a32dca04abce2822c9102e0d4ce512ab6e598c7->leave($__internal_87be3cb228c575b0cb6a289d5a32dca04abce2822c9102e0d4ce512ab6e598c7_prof);

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
