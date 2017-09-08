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
        $__internal_2b0e7e071ee346b195558b977e5d42b8608147282f7bf04c918921dbad1579be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b0e7e071ee346b195558b977e5d42b8608147282f7bf04c918921dbad1579be->enter($__internal_2b0e7e071ee346b195558b977e5d42b8608147282f7bf04c918921dbad1579be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle::layout.html.twig"));

        $__internal_a1241e47696d4c7b9238517fcaddac2c04414d13c5a1b2b92458aa3837a1dadc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1241e47696d4c7b9238517fcaddac2c04414d13c5a1b2b92458aa3837a1dadc->enter($__internal_a1241e47696d4c7b9238517fcaddac2c04414d13c5a1b2b92458aa3837a1dadc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b0e7e071ee346b195558b977e5d42b8608147282f7bf04c918921dbad1579be->leave($__internal_2b0e7e071ee346b195558b977e5d42b8608147282f7bf04c918921dbad1579be_prof);

        
        $__internal_a1241e47696d4c7b9238517fcaddac2c04414d13c5a1b2b92458aa3837a1dadc->leave($__internal_a1241e47696d4c7b9238517fcaddac2c04414d13c5a1b2b92458aa3837a1dadc_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_79010d63a1bce7add401e88446fb9ebb8363ddafc08d16718b1505de54e2485e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79010d63a1bce7add401e88446fb9ebb8363ddafc08d16718b1505de54e2485e->enter($__internal_79010d63a1bce7add401e88446fb9ebb8363ddafc08d16718b1505de54e2485e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b44d377625b689b1654e5269580ede12a148b0b6a97ca3f348cf289f21e4a408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b44d377625b689b1654e5269580ede12a148b0b6a97ca3f348cf289f21e4a408->enter($__internal_b44d377625b689b1654e5269580ede12a148b0b6a97ca3f348cf289f21e4a408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b44d377625b689b1654e5269580ede12a148b0b6a97ca3f348cf289f21e4a408->leave($__internal_b44d377625b689b1654e5269580ede12a148b0b6a97ca3f348cf289f21e4a408_prof);

        
        $__internal_79010d63a1bce7add401e88446fb9ebb8363ddafc08d16718b1505de54e2485e->leave($__internal_79010d63a1bce7add401e88446fb9ebb8363ddafc08d16718b1505de54e2485e_prof);

    }

    // line 22
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_55f4af3183b027d752cd568974e04fa5eee222a1519f827206acbe90481e24ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55f4af3183b027d752cd568974e04fa5eee222a1519f827206acbe90481e24ee->enter($__internal_55f4af3183b027d752cd568974e04fa5eee222a1519f827206acbe90481e24ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8ccb4c7199ed5b903962cd5e10c342be3a3c391976f651a62655b099deaa9be5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ccb4c7199ed5b903962cd5e10c342be3a3c391976f651a62655b099deaa9be5->enter($__internal_8ccb4c7199ed5b903962cd5e10c342be3a3c391976f651a62655b099deaa9be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 23
        echo "    ";
        
        $__internal_8ccb4c7199ed5b903962cd5e10c342be3a3c391976f651a62655b099deaa9be5->leave($__internal_8ccb4c7199ed5b903962cd5e10c342be3a3c391976f651a62655b099deaa9be5_prof);

        
        $__internal_55f4af3183b027d752cd568974e04fa5eee222a1519f827206acbe90481e24ee->leave($__internal_55f4af3183b027d752cd568974e04fa5eee222a1519f827206acbe90481e24ee_prof);

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
