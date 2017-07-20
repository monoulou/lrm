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
        $__internal_14420b480cb77bb0b59bd8f12c9a52c9aab867b9dfd5161777cad4628be7a8d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14420b480cb77bb0b59bd8f12c9a52c9aab867b9dfd5161777cad4628be7a8d2->enter($__internal_14420b480cb77bb0b59bd8f12c9a52c9aab867b9dfd5161777cad4628be7a8d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_d499e92378619569cd3d5e323f77a46b952a41dba59b61ec47a082a335b7b55b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d499e92378619569cd3d5e323f77a46b952a41dba59b61ec47a082a335b7b55b->enter($__internal_d499e92378619569cd3d5e323f77a46b952a41dba59b61ec47a082a335b7b55b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14420b480cb77bb0b59bd8f12c9a52c9aab867b9dfd5161777cad4628be7a8d2->leave($__internal_14420b480cb77bb0b59bd8f12c9a52c9aab867b9dfd5161777cad4628be7a8d2_prof);

        
        $__internal_d499e92378619569cd3d5e323f77a46b952a41dba59b61ec47a082a335b7b55b->leave($__internal_d499e92378619569cd3d5e323f77a46b952a41dba59b61ec47a082a335b7b55b_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_47bb58868b855153613a0c87a887fe0769c368b5093199ad1cc34935c7dc09a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47bb58868b855153613a0c87a887fe0769c368b5093199ad1cc34935c7dc09a7->enter($__internal_47bb58868b855153613a0c87a887fe0769c368b5093199ad1cc34935c7dc09a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f412b7fb3e33ba06d492c1df0869c98d48cd685d5ed0199b66da6ffe8c79aa90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f412b7fb3e33ba06d492c1df0869c98d48cd685d5ed0199b66da6ffe8c79aa90->enter($__internal_f412b7fb3e33ba06d492c1df0869c98d48cd685d5ed0199b66da6ffe8c79aa90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f412b7fb3e33ba06d492c1df0869c98d48cd685d5ed0199b66da6ffe8c79aa90->leave($__internal_f412b7fb3e33ba06d492c1df0869c98d48cd685d5ed0199b66da6ffe8c79aa90_prof);

        
        $__internal_47bb58868b855153613a0c87a887fe0769c368b5093199ad1cc34935c7dc09a7->leave($__internal_47bb58868b855153613a0c87a887fe0769c368b5093199ad1cc34935c7dc09a7_prof);

    }

    // line 22
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c655e39875df0036ace7702f67cf16c0068d2d44ade80f80292a06f4a68078e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c655e39875df0036ace7702f67cf16c0068d2d44ade80f80292a06f4a68078e2->enter($__internal_c655e39875df0036ace7702f67cf16c0068d2d44ade80f80292a06f4a68078e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_79ceb0a653e8e93598635352701d24b358926fdba4ffd4bc9f3c52d4843d430a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79ceb0a653e8e93598635352701d24b358926fdba4ffd4bc9f3c52d4843d430a->enter($__internal_79ceb0a653e8e93598635352701d24b358926fdba4ffd4bc9f3c52d4843d430a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 23
        echo "    ";
        
        $__internal_79ceb0a653e8e93598635352701d24b358926fdba4ffd4bc9f3c52d4843d430a->leave($__internal_79ceb0a653e8e93598635352701d24b358926fdba4ffd4bc9f3c52d4843d430a_prof);

        
        $__internal_c655e39875df0036ace7702f67cf16c0068d2d44ade80f80292a06f4a68078e2->leave($__internal_c655e39875df0036ace7702f67cf16c0068d2d44ade80f80292a06f4a68078e2_prof);

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
