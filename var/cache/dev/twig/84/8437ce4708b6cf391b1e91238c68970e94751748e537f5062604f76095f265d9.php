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
        $__internal_abe8c1f6cd6a1219011514d2a5e293ecaf7325caa0c8db6e9eb4b4b44f287e95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abe8c1f6cd6a1219011514d2a5e293ecaf7325caa0c8db6e9eb4b4b44f287e95->enter($__internal_abe8c1f6cd6a1219011514d2a5e293ecaf7325caa0c8db6e9eb4b4b44f287e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle::layout.html.twig"));

        $__internal_ea42af0db8d87baef33a4ac91385f1e7ed3be037167de221c3619c8d3afcf85b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea42af0db8d87baef33a4ac91385f1e7ed3be037167de221c3619c8d3afcf85b->enter($__internal_ea42af0db8d87baef33a4ac91385f1e7ed3be037167de221c3619c8d3afcf85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abe8c1f6cd6a1219011514d2a5e293ecaf7325caa0c8db6e9eb4b4b44f287e95->leave($__internal_abe8c1f6cd6a1219011514d2a5e293ecaf7325caa0c8db6e9eb4b4b44f287e95_prof);

        
        $__internal_ea42af0db8d87baef33a4ac91385f1e7ed3be037167de221c3619c8d3afcf85b->leave($__internal_ea42af0db8d87baef33a4ac91385f1e7ed3be037167de221c3619c8d3afcf85b_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc10ce733bfce7d402989e8429cbd44d86c74aeec88f1473fae12d53369891cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc10ce733bfce7d402989e8429cbd44d86c74aeec88f1473fae12d53369891cc->enter($__internal_cc10ce733bfce7d402989e8429cbd44d86c74aeec88f1473fae12d53369891cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9c3a148855eba8b7f3e4867d4f5cd6ada67751f4892ebe2bb3a56cb25f95c114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c3a148855eba8b7f3e4867d4f5cd6ada67751f4892ebe2bb3a56cb25f95c114->enter($__internal_9c3a148855eba8b7f3e4867d4f5cd6ada67751f4892ebe2bb3a56cb25f95c114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9c3a148855eba8b7f3e4867d4f5cd6ada67751f4892ebe2bb3a56cb25f95c114->leave($__internal_9c3a148855eba8b7f3e4867d4f5cd6ada67751f4892ebe2bb3a56cb25f95c114_prof);

        
        $__internal_cc10ce733bfce7d402989e8429cbd44d86c74aeec88f1473fae12d53369891cc->leave($__internal_cc10ce733bfce7d402989e8429cbd44d86c74aeec88f1473fae12d53369891cc_prof);

    }

    // line 22
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_43bacf18cc0819daf34b747e45129484b0082681a8dff3960c04b3cdae9f15dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43bacf18cc0819daf34b747e45129484b0082681a8dff3960c04b3cdae9f15dd->enter($__internal_43bacf18cc0819daf34b747e45129484b0082681a8dff3960c04b3cdae9f15dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9f632243f631e9ef811bc7fb6cbcb4b44199a521da00b7c8dc6d2689f70a28a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f632243f631e9ef811bc7fb6cbcb4b44199a521da00b7c8dc6d2689f70a28a7->enter($__internal_9f632243f631e9ef811bc7fb6cbcb4b44199a521da00b7c8dc6d2689f70a28a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 23
        echo "    ";
        
        $__internal_9f632243f631e9ef811bc7fb6cbcb4b44199a521da00b7c8dc6d2689f70a28a7->leave($__internal_9f632243f631e9ef811bc7fb6cbcb4b44199a521da00b7c8dc6d2689f70a28a7_prof);

        
        $__internal_43bacf18cc0819daf34b747e45129484b0082681a8dff3960c04b3cdae9f15dd->leave($__internal_43bacf18cc0819daf34b747e45129484b0082681a8dff3960c04b3cdae9f15dd_prof);

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
