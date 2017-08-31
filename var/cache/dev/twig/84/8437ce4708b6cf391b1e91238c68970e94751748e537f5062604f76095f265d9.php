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
        $__internal_af466a2538e789832c7f795ab924849a33ce6b88658c95730ea2c7a93b8c7c5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af466a2538e789832c7f795ab924849a33ce6b88658c95730ea2c7a93b8c7c5a->enter($__internal_af466a2538e789832c7f795ab924849a33ce6b88658c95730ea2c7a93b8c7c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle::layout.html.twig"));

        $__internal_73be218ff25fba85d2d5fafc92b78712420540c073647267c485f0bc1c884bc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73be218ff25fba85d2d5fafc92b78712420540c073647267c485f0bc1c884bc7->enter($__internal_73be218ff25fba85d2d5fafc92b78712420540c073647267c485f0bc1c884bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af466a2538e789832c7f795ab924849a33ce6b88658c95730ea2c7a93b8c7c5a->leave($__internal_af466a2538e789832c7f795ab924849a33ce6b88658c95730ea2c7a93b8c7c5a_prof);

        
        $__internal_73be218ff25fba85d2d5fafc92b78712420540c073647267c485f0bc1c884bc7->leave($__internal_73be218ff25fba85d2d5fafc92b78712420540c073647267c485f0bc1c884bc7_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_44a4f7fbf6f0684c9fc3054b9057537d9b2af9d68eefc8493aa09f85c8ffdf95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44a4f7fbf6f0684c9fc3054b9057537d9b2af9d68eefc8493aa09f85c8ffdf95->enter($__internal_44a4f7fbf6f0684c9fc3054b9057537d9b2af9d68eefc8493aa09f85c8ffdf95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f96f3c4d603a5255e644d472e2a90f1bb80f9d74f53fdf1f5a62353b49aff2b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f96f3c4d603a5255e644d472e2a90f1bb80f9d74f53fdf1f5a62353b49aff2b9->enter($__internal_f96f3c4d603a5255e644d472e2a90f1bb80f9d74f53fdf1f5a62353b49aff2b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f96f3c4d603a5255e644d472e2a90f1bb80f9d74f53fdf1f5a62353b49aff2b9->leave($__internal_f96f3c4d603a5255e644d472e2a90f1bb80f9d74f53fdf1f5a62353b49aff2b9_prof);

        
        $__internal_44a4f7fbf6f0684c9fc3054b9057537d9b2af9d68eefc8493aa09f85c8ffdf95->leave($__internal_44a4f7fbf6f0684c9fc3054b9057537d9b2af9d68eefc8493aa09f85c8ffdf95_prof);

    }

    // line 22
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7a9156890e587dcc484bb6deb83683398c5cf44c306abf406360092be90cacba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a9156890e587dcc484bb6deb83683398c5cf44c306abf406360092be90cacba->enter($__internal_7a9156890e587dcc484bb6deb83683398c5cf44c306abf406360092be90cacba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e100c3df6dd8bddb34ae1c90cec5729c72021b3d84e24aad4ec863f907dd9ced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e100c3df6dd8bddb34ae1c90cec5729c72021b3d84e24aad4ec863f907dd9ced->enter($__internal_e100c3df6dd8bddb34ae1c90cec5729c72021b3d84e24aad4ec863f907dd9ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 23
        echo "    ";
        
        $__internal_e100c3df6dd8bddb34ae1c90cec5729c72021b3d84e24aad4ec863f907dd9ced->leave($__internal_e100c3df6dd8bddb34ae1c90cec5729c72021b3d84e24aad4ec863f907dd9ced_prof);

        
        $__internal_7a9156890e587dcc484bb6deb83683398c5cf44c306abf406360092be90cacba->leave($__internal_7a9156890e587dcc484bb6deb83683398c5cf44c306abf406360092be90cacba_prof);

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
